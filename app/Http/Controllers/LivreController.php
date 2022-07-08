<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function getAll()
    {
        $titre = 'Titre du Livre';
        $livres = Livres::with('auteur')->get();

        return view('livres', ['livres' => $livres, 'titre' => $titre]);
    }
    public function get(Request $request, $id)
    {
        $livre = Livres::find($id);
        return view('livre', ['livre' => $livre]);
    }

    public function add(Request $request)
    {
        // Validator (pas pour le moment)
        $input = $request->input();
        $auteur = Auteurs::where('nom', '=', $input['nom'])
            ->where('prenom', '=', $input['prenom'])
            ->first();
        if (!isset($auteur)) {
            $auteur = new Auteurs();
            $auteur->nom = $input['nom'];
            $auteur->prenom = $input['prenom'];
            $auteur->save();
        }
        $auteur = isset($auteur) ? $auteur : new Auteurs();
        $auteur->nom = $input['nom'];
        $auteur->prenom = $input['prenom'];
        $auteur->save();
        $livre = new Livres();
        $livre->titre = $input['titre'];
        $livre->auteur()->associate($auteur);
        $livre->save();
        return redirect()->route('livres');
    }


    public function destroy($id)
    {
        // $data=Livres::find($id);
        // $data->delete();
        $livre = Livres::whereId($id)->first();

        $livre->delete();

        return redirect('/livres')->with('success_delete', 'Le livres à été effacer');
    }
    public function update(Request $request, $id){
        $input = $request->input();
        $livre = Livres::find($id);
        $livre->titre = $input['titre'];
        $livre->save();
        return redirect()->route('livres');
    }

}
