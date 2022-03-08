<?php

namespace App\Http\Controllers;

use App\Models\Beer_type;
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
        $types = DB::select('SELECT * FROM beer_types');

        return view('beertypes', [
            'types' => $types
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Beer_type $type
     * @return Application|Factory|View
     */
    public function show(Beer_type $type)
    {
        $beers = DB::select(
            'SELECT * FROM beers WHERE type=?', [$type->type]
        );

        return view('beertype', [
            'type' => $type,
            'beers' => $beers
        ]);
    }
}
