<?php

namespace App\Http\Controllers;

use App\Models\GrapeType;
use Illuminate\Http\Request;

class GrapeTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grape_types = GrapeType::all();
        return view('dashboard.admin.grape_types.grapeTypesList', array(
            'grape_types' => $grape_types,
        ));
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
     * @param  \App\Models\GrapeType  $grapeType
     * @return \Illuminate\Http\Response
     */
    public function show(GrapeType $grapeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrapeType  $grapeType
     * @return \Illuminate\Http\Response
     */
    public function edit(GrapeType $grapeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrapeType  $grapeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrapeType $grapeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrapeType  $grapeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrapeType $grapeType)
    {
        //
    }
}
