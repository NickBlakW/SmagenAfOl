<?php

namespace App\Http\Controllers;

use App\Imports\Beer_typeImport;
use App\Imports\BeerImport;
use App\Imports\BreweryImport;
use App\Models\Beer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index() {
        $beers = Beer::all();

        return view('udforsk', [
            'beers' => $beers
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Beer $beer
     * @return Application|Factory|View
     */
    public function show(Beer $beer)
    {
        $type = $beer->type;
        $brewery = $beer->brewery;

        $types = DB::select('SELECT * FROM beers
                                WHERE type=?', [$type]);
        $breweries = DB::select('SELECT * FROM breweries
                                WHERE name=?', [$brewery]);

        return view('beer', [
            'beer' => $beer,
            'types' => $types,
            'breweries' => $breweries
        ]);
    }
}
