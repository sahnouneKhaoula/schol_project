<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Unniversite;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants= Etudiant::all();
        return view('etudiants.index',compact('etudiants',$etudiants));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unniversites= Unniversite::all();
        return view('etudiants.create',compact('unniversites',$unniversites));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
            'email' => 'required|unique:etudiants',
            'telephone'  => 'required'
        ]);

       $image = $request->file('photo');
       $nomimage = 'etudiant'.time().uniqid().'.'.$image->getClientOriginalExtension();
       $path= $image->storeAS('imagesetudiants',$nomimage);
       $etudiant = new Etudiant();
       $etudiant->nom = $request->nom;
       $etudiant->prenom = $request->prenom;
       $etudiant->telephone = $request->telephone;
       $etudiant->email = $request->email;
       $etudiant->photo = $nomimage;
       $etudiant->classe_id = $request->classe;
        
        $etudiant->save();

        return redirect()->route('etudiants.index')->with('message','Etudiant enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $etudiant = Etudiant::find($id);
        return view('etudiants.show')->with('etudiant',$etudiant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
         return view('etudiants.edit')->with('etudiant',$etudiant);
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
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->save();
        return redirect()->route('etudiants.index')->with('message','Etudiant modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $etudiants = Etudiant::find($id);
        $etudiants->delete();
        return redirect()->route('etudiants.index')->with('messagedelete','etudiant supprimée');
    }
}
