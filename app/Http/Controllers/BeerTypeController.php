<?php

namespace App\Http\Controllers;

use App\Models\Beer_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Beer_type::all();

        return view('beertypes', [
            'beertypes' => $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beer_type  $beer_type
     * @return \Illuminate\Http\Response
     */
    public function show(Beer_type $beer_type)
    {
        $type = $beer_type->type;
        $beers = DB::select(
            'SELECT * FROM beers WHERE type=?', [$type]
        );

        return view('beertype', [
            'beers' => $beers
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beer_type  $beer_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer_type $beer_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beer_type  $beer_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer_type $beer_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beer_type  $beer_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer_type $beer_type)
    {
        //
    }
}
