<?php

namespace App\Http\Controllers;

use App\Models\Destillery;
use App\Models\Spirit;
use App\Models\SpiritType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpiritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spirit.spirit_index');
    }

    public function spirits() {
        $spirits = Spirit::all();

        return view('spirit.spirits', [
            'spirits' => $spirits
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spirit  $spirit
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Spirit $spirit)
    {
        $type = $spirit->type;
        $destillery = $spirit->destillery;

        $types = DB::select(
            'SELECT * FROM spirit_types
            WHERE type=?', [$type]
        );

        $destilleries = DB::select(
            'SELECT * FROM destilleries
                  WHERE name=?', [$destillery]
        );

        return view('spirit.product', [
            'spirit' => $spirit,
            'types' => $types,
            'destilleries' => $destilleries
        ]);
    }

    public function destilleries() {
        $destilleries = Destillery::all();

        return view('spirit.destilleries', [
            'destilleries' => $destilleries
        ]);
    }

    public function destillery(Destillery $destillery) {
        $name = $destillery->name;

        $spirits = DB::select(
            'SELECT * FROM spirits
                  WHERE destillery=?', [$name]
        );

        return view('spirit.destillery', [
            'destillery' => $destillery,
            'spirits' => $spirits
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spirit  $spirit
     * @return \Illuminate\Http\Response
     */
    public function edit(Spirit $spirit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spirit  $spirit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spirit $spirit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spirit  $spirit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spirit $spirit)
    {
        //
    }
}
