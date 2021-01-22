<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures = Voiture::latest()->paginate(3);
        return view('voitures.index', compact('voitures'));
    }

    public function admin()
    {
        $voitures = Voiture::latest()->paginate(3);
        return view('voitures.admin', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voiture = new Voiture();

        $voiture->modele = $request->input('modele');
        $voiture->marque = $request->input('marque');
        $voiture->puissance = $request->input('puissance');
        $voiture->annee = $request->input('annee');
        $voiture->finition = $request->input('finition');
        $voiture->description = $request->input('description');
        $voiture->prix = $request->input('prix');

        if ($request->hasfile('photo_principale'))
        {
            $file = $request->file('photo_principale');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('voiture', $filename);
            $voiture->photo_principale = $filename;
        }
        else
        {
            return redirect('/create')->with('error', 'Problème lors de la création !');
        }

        $voiture->save();

        return redirect('/admin')->with('success', 'Voiture crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('voitures.show', ['voiture' => Voiture::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)      //Voiture $voiture
    {
        $voiture = Voiture::findOrFail($id);
        return view('voitures.edit', compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $voiture = Voiture::findOrFail($id);

        $request->validate([
            'modele' => 'required',
            'marque' => 'required',
            'description' => 'required',
            'finition' => 'required',
            'puissance' => 'required',
            'annee' => 'required',
            'prix' => 'required'
        ]);

        if ($request->hasfile('photo_principale')) {
            $file = $request->file('photo_principale');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('voiture', $filename);
            $path = public_path().'/voiture/';
            $old = $path.$voiture->photo_principale;
            unlink($old);
            $update['photo_principale'] = $filename;
        }
        
        $update['modele'] = $request->get('modele');
        $update['marque'] = $request->get('marque');
        $update['description'] = $request->get('description');
        $update['finition'] = $request->get('finition');
        $update['puissance'] = $request->get('puissance');
        $update['annee'] = $request->get('annee');
        $update['prix'] = $request->get('prix');
        $voiture->update($update);

        return redirect('/admin')->with('success', 'Voiture modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();
        return redirect('/admin')->with('success', 'Voiture supprimé avec succès !');
    }
}
