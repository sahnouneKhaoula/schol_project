<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Unniversite;
class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $classes = Classe::all();
         return view('classes.index')->with('classes',$classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unniversites= Unniversite::all();
        return view('classes.create',compact('unniversites',$unniversites));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $classe = new Classe();

        $classe->nom = $request->nom;
        $classe->description = $request->description;
        $classe->unniversite_id = $request->unniversite;

        $classe->save();

        return redirect()->route('classes.index')->with('message','Classe enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classe = Classe::find($id);
        return view('classes.show')->with('classe',$classe);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $classe = Classe::find($id);
         return view('classes.edit')->with('classe',$classe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $classe = Classe::find($id);
        $classe->nom = $request->nom;
        $classe->description = $request->description;
        $classe->save();
        return redirect()->route('classes.index')->with('message','Classe modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete();
        return redirect()->route('classes.index')->with('messagedelete','Classe supprimée');
    }
    public function list_classe($id){
        $unniversite = Unniversite::find($id);

        $clalsses =$unniversite->Classe;
        return $clalsses;

    }
}
