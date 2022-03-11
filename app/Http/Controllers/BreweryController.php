<?php

namespace App\Http\Controllers;

use App\Imports\BreweryImport;
use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BreweryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $breweries = Brewery::all();

        return view('breweries', [
            'breweries' => $breweries
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brewery $brewery
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Brewery $brewery)
    {
        $name = $brewery->name;

        $beers = DB::select(
            'SELECT * FROM beers WHERE brewery=?', [$name]
        );

        return view('brewery', [
            'brewery' => $brewery,
            'beers' => $beers
        ]);
    }
}
