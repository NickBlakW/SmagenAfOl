<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $beers = DB::select('SELECT * FROM beers WHERE beer_of_the_day=?', [1]);
        $announcements = DB::select('SELECT announcement FROM announcements');

        return view('index', [
            'beers' => $beers
        ], [
            'announcements' => $announcements
        ]);
    }

    public function admin() {
        return view('admin');
    }

    public function store() {
        return null;
    }
}
