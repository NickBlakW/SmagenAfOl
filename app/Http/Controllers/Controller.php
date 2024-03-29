<?php

namespace App\Http\Controllers;

use App\Imports\ImportAll;
use App\Models\announcement;
use App\Models\Beer;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $botds = DB::select('SELECT * FROM beers WHERE beer_of_the_day=?', [1]);
        $announcements = DB::select(
            'SELECT * FROM announcements
                    ORDER BY id DESC');

        $beers = Beer::all();

        if ($beers->count() != 0) {
            $beer = Beer::all()
                ->random();
        } else {
            $beer = null;
        }

        // Cookie::queue('age_check', 'valid', 15);

        return view('index', [
            'botds' => $botds,
            'announcements' => $announcements,
            'beer' => $beer
        ]);// ->with('ageCheck');
    }

    /*
     * Controls for the admin to edit data
     *
     */
    public function admin() {
        $beers = DB::select(
            'SELECT * FROM beers
                  ORDER BY name'
        );

        return view('admin', [
            'beers' => $beers
        ]);
    }

    /*
     * Clearing the data in the database
     *
     */
    public function deleteAllData() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('beers')->truncate();
        DB::table('breweries')->truncate();
        DB::table('spirits')->truncate();
        DB::table('destilleries')->truncate();

        return back()->with('success', 'Al Data slettet!');
    }

    /*
     * Upload an image directly to public/images
     *
     */
    public function uploadImage(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif',
        ]);

        if ($file = $request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $file->move($destinationPath, $fileName);

        }

        return back()->with('success', 'Billede uploadet!');
    }

    /*
     * Announcement creator for front-page
     *
     */
    public function createAnnouncement(Request $request): RedirectResponse
    {
        $announcement = new Announcement();
        $announcement->announcement = $request->input('announcement');
        $announcement->save();

        return back()->with('success', 'Nyhed uploadet!');
    }

    /*
     * Reset and remove "Beer of the day"
     *
     */
    public function reset_botd() {
        DB::update(
            'UPDATE beers SET beer_of_the_day=0
                    WHERE beer_of_the_day=1'
        );

        return back()->with('success', 'Dagens øl fjernet');
    }

    /*
     * Set "Beer of the day"
     *
     */
    public function set_botd(Request $request) {
        $botd = $request->input('botd');

        DB::update(
            'UPDATE beers SET beer_of_the_day=1 WHERE name=?', [$botd]
        );

        return back()->with('success', 'Dagens øl er nu: '.$botd);
    }

    /*
     * Populate dropdown menu for setting "Beer of the day"
     *
     */
    public function dropdown_botd(Request $request) {
        $botd = $request->input('drop');

        DB::update(
            'UPDATE beers SET beer_of_the_day=1 WHERE name=?', [$botd]
        );

        return back()->with('success', 'Dagens øl er nu: '.$botd);
    }

    /*
     * Upload data (beer / spirits) to database
     * First reset database to avoid conflicts
     */
    public function allBeerUpload() {

        $this->deleteAllData();
        Excel::import(new ImportAll(), \request()->file('file'));

        return back()->with('success', 'Alt opdateret!');
    }

    /*
     * Go to login page
     *
     */
    public function toLogin() {
        return view('standard.login');
    }

    /*
     * Function to create new admin if necessary
     *
     */
    public function createAdmin(Request $request) {

        $user = new User();
        $user->name = $request->input('admin-name');
        $user->password = bcrypt($request->input('admin-pass'));
        $user->save();

        return back()->with('success', $user->name.' oprettet!');
    }

    /*
     * Check if login is valid
     * Only log in if user is authorized
     */
    public function login(Request $request) {
        $name = $request->input('name');
        $password = $request->input('password');

        if (Auth::attempt([
            'name' => $name,
            'password' => $password
        ])) {
            return redirect()->route('admin');
        }

        return back()->with('login-error', 'Kunne ikke logge ind');
    }

    /*
     * Change password for an admin
     *
     */
    public function changePassword(Request $request) {
        $id = $request->user()->id;

        $password = bcrypt($request->input('new-password'));

        DB::update('UPDATE users SET password=? WHERE id=?', [$password, $id]);

        return back()->with('success', 'Password opdateret!');
    }

    /*
     * Logout function
     *
     */
    public function logout() {
        return redirect()->route('login')->with(Auth::logout());
    }
}
