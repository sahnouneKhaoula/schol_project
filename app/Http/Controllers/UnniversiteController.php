<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unniversite;
class UnniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $unniversites = Unniversite::all();
      return view('unniversites.index')->with('unniversites',$unniversites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('unniversites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unniversite = new Unniversite();

        $unniversite->libelle = $request->libelle;
        $unniversite->description = $request->description;

        $unniversite->save();

        return redirect()->route('unniversites.index')->with('message','Unniversite enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $unniversite = Unniversite::find($id);
        return view('unniversites.show')->with('unniversite',$unniversite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $unniversite = Unniversite::find($id);
         return view('unniversites.edite')->with('unniversite',$unniversite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $unniversite = Unniversite::find($id);
        $unniversite->libelle = $request->libelle;
        $unniversite->description = $request->description;
        $unniversite->save();
        return redirect()->route('unniversites.index')->with('message','Unniversité modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unniversite = Unniversite::find($id);
        $unniversite->delete();
        return redirect()->route('unniversites.index')->with('messagedelete','Unniversite supprimée');
    }
}
