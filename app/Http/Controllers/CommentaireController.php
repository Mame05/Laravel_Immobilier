<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function AjouterCommentaireTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate([
            'auteur' => 'required',
            'contenu' => 'required',
            'bien_id'=>'required',
            
        ]);
        
        $commentaire= new Commentaire();
        $commentaire->bien_id = $request->bien_id;
        $commentaire->auteur = $request->auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->save();
        return redirect()->back();
       }

       public function ModifierCommentaire($id){
        
        $commentaires = Commentaire::find($id);
        return view('commentaires/modifiercom', compact('commentaires'));
    }

       public function ModifierCommentaireTraitement(Request $request){
        /*dd($request->all());*/
        $bien = Bien::find($request->bien_id); /*cela permet que lorsqu'on fera la redirection vers la page détail du méme article*/
        $request->validate(["
        'auteur' => 'required|max:15'
        'contenu' => 'required|max:255'
        'bien_id'=>'required|exists:bien,id'
        "]);
        $commentaire = Commentaire::findOrFail($request->id);
        $commentaire->bien_id = $request->bien_id;
        $commentaire->auteur = $request->auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->update();
        return view('biens/detail', compact('bien'));    
       }

       public function SupprimerCommentaire($id){
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return redirect()->back();
       }
}
