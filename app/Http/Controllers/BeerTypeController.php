<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class BeerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $types = DB::select('SELECT distinct type FROM beers');

        return view('beertypes', [
            'types' => $types
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show(string $type)
    {

        $beers = DB::select(
            'SELECT * FROM beers WHERE type=?', [$type]
        );

        return view('beertype', [
            'type' => $type,
            'beers' => $beers
        ]);
    }
}
