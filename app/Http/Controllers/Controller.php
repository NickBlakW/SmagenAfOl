<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use App\Models\Beer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $botds = DB::select('SELECT * FROM beers WHERE beer_of_the_day=?', [1]);
        $announcements = DB::select('SELECT announcement FROM announcements');

        $beer = Beer::all()
            ->random();

//        $brewery = DB::table('breweries')
//            ->inRandomOrder()
//            ->limit(5)
//            ->get();

        return view('index', [
            'botds' => $botds,
            'announcements' => $announcements,
            'beer' => $beer,
//            'brewery' => $brewery
        ]);
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
        DB::delete('DELETE FROM beers');
        DB::delete('DELETE FROM beer_types');
        DB::delete('DELETE FROM breweries');

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
}
