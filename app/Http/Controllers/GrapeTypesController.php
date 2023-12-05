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
        return view('dashboard.admin.grape_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'             => 'required',
            'yeld_percentage'  => 'required|min:1|max:100',
        ]);

        $validatedData["yeld_percentage"] = $validatedData["yeld_percentage"]/100;
        GrapeType::create($validatedData);

        return redirect()->route('grape_types.index');
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
        return view('dashboard.admin.grape_types.edit', [ 'grape_type' => $grapeType ]);
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
        $validatedData = $request->validate([
            'name'             => 'required',
            'yeld_percentage'  => 'required|min:1|max:100',
        ]);

        $validatedData["yeld_percentage"] = $validatedData["yeld_percentage"]/100;
        
        $grapeType->update($validatedData);

        return redirect()->route('grape_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrapeType  $grapeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GrapeType $grapeType)
    {
        $grapeType->delete();
        $request->session()->flash('message', 'Casta apagada com sucesso!');
        return redirect()->route('grape_types.index');
    }
}
