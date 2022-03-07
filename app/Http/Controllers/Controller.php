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

    public function admin() {
        $beers = DB::select(
            'SELECT * FROM beers
                  ORDER BY name'
        );

        return view('admin', [
            'beers' => $beers
        ]);
    }

    public function deleteAllData() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('beers')->truncate();
        DB::table('beer_types')->truncate();
        DB::table('breweries')->truncate();
        DB::table('spirits')->truncate();
        DB::table('spirit_types')->truncate();
        DB::table('destilleries')->truncate();

//        DB::delete('DELETE FROM beers');
//        DB::delete('DELETE FROM beer_types');
//        DB::delete('DELETE FROM breweries');
//        DB::delete('DELETE FROM spirits');
//        DB::delete('DELETE FROM spirit_types');
//        DB::delete('DELETE FROM destilleries');

        return back()->with('success', 'Al Data slettet!');
    }

    public function uploadImage(Request $request)
    {
        //
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

    public function createAnnouncement(Request $request) {
        $announcement = new Announcement();
        $announcement->announcement = $request->input('announcement');
        $announcement->save();

        return back()->with('success', 'Nyhed uploadet!');
    }

    public function reset_botd() {
        DB::update(
            'UPDATE beers SET beer_of_the_day=0
                    WHERE beer_of_the_day=1'
        );

        return back()->with('success', 'Dagens øl fjernet');
    }

    public function set_botd(Request $request) {
        $botd = $request->input('botd');

        DB::update(
            'UPDATE beers SET beer_of_the_day=1 WHERE name=?', [$botd]
        );

        return back()->with('success', 'Dagens øl er nu: '.$botd);
    }

    public function dropdown_botd(Request $request) {
        $botd = $request->input('drop');

        DB::update(
            'UPDATE beers SET beer_of_the_day=1 WHERE name=?', [$botd]
        );

        return back()->with('success', 'Dagens øl er nu: '.$botd);
    }

    public function allBeerUpload() {

        $this->deleteAllData();
        Excel::import(new ImportAll(), \request()->file('file'));

        return back()->with('success', 'Alt opdateret!');
    }

    public function toLogin() {
        return view('standard.login');
    }

    public function createAdmin(Request $request) {
//        $request->validate([
//            'admin-name' => ['required','string'],
//            'admin-pass' => ['required','confirmed','min:6'],
//            'admin-confirm' => ['required','min:6']
//        ]);

        $user = new User();
        $user->name = $request->input('admin-name');
        $user->password = bcrypt($request->input('admin-pass'));
        $user->save();

        return back()->with('success', $user->name.' oprettet!');
    }

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

    public function changePassword(Request $request) {
        $id = $request->user()->id;

        $password = bcrypt($request->input('new-password'));

        DB::update('UPDATE users SET password=? WHERE id=?', [$password, $id]);

        return back()->with('success', 'Password opdateret!');
    }

    public function logout() {
        return redirect()->route('login')->with(Auth::logout());
    }
}
