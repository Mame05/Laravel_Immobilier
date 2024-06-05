<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /*public function index(){
        return view('bien/index');
    }*/

    public function ListeBien(){
        $biens = Bien::all ();
          return view('biens/index', compact('biens'));


     }

    public function AjouterBien(){
        return view ('biens/ajouter');

     }

        public function AjouterBienTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'image' => 'required', // Validation d'image si elle est fournie
            'description' => 'required',
            'adresse' => 'required',
            'statut' => 'required',
            'date_ajout' => 'required',
        ]);

        $bien =new Bien();
        $bien->nom = $request->nom;
        $bien->categorie = $request->categorie;
        $bien->image = $request->input('image');
        $bien->description = $request->description;
        $bien->adresse = $request->adresse;
        $bien->statut = $request->statut;
        $bien->date_ajout = $request->date_ajout;
        $bien->save();

        return redirect('/bien')->with('status', "Le bien a bien été ajouté avec succés.");
    }




// modification Bien
public function ModifierBien($id)
{
    $biens = Bien::findOrFail($id);
    return view('biens/modifier', compact('biens'));

}

public function ModifierBienTraitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'categorie' => 'required',
        'image' => 'required', // Validation d'image si elle est fournie
        'description' => 'required',
        'adresse' => 'required',
        'statut' => 'required',
        'date_ajout' => 'required',
    ]);

    $bien = Bien::findOrFail($request->id);
    $bien->nom = $request->nom;
    $bien->categorie = $request->categorie;
    $bien->image = $request->input('image');
    $bien->description = $request->description;
    $bien->adresse = $request->adresse;
    $bien->statut = $request->statut;
    $bien->date_ajout = $request->date_ajout;
    $bien->update();

    return redirect('/bien')->with('status', "Le bien a bien été modifié avec succés.");
}


 }
