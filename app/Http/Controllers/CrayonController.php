<?php

namespace App\Http\Controllers;

use App\Models\Crayon;
use Illuminate\Http\Request;

class CrayonController extends Controller
{
    // Afficher la liste des crayons
    public function index()
    {
        $crayons = Crayon::all();
        return view('crayons.index', compact('crayons'));
    }

    // Afficher le formulaire de création de crayona
    public function create()
    {
        return view('crayons.create');
    }

    // Enregistrer un nouveau crayon dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'marque' => 'required',
            'couleur' => 'required',
            'quantite' => 'required|integer|min:1',
            'prix' => 'required|integer'
        ]);

        Crayon::create([
            'type' => $request->input('type'),
            'marque' => $request->input('marque'),
            'couleur' => $request->input('couleur'),
            'quantite' => $request->input('quantite'),
            'prix' => $request->input('prix'),
        ]);

        return redirect('/crayons')->with('success', 'Crayon ajouté avec succès');
    }

    // Afficher le formulaire de modification de crayon
    public function edit($id)
    {
        $crayon = Crayon::findOrFail($id);
        return view('crayons.edit', compact('crayon'));
    }

    // Mettre à jour les informations du crayon dans la base de données
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'quantite' => 'required|integer|min:1',
            'prix' => 'required|integer'
        ]);

        $crayon = Crayon::findOrFail($id);
        $crayon->update([
            'type' => $request->input('type'),
            'marque' => $request->input('marque'),
            'quantite' => $request->input('quantite'),
        ]);

        return redirect('/crayons')->with('success', 'Crayon mis à jour avec succès');
    }

    // Supprimer un crayon de la base de données
    public function destroy($id)
    {
        $crayon = Crayon::findOrFail($id);
        $crayon->delete();

        return redirect('/crayons')->with('success', 'Crayon supprimé avec succès');
    }
}

