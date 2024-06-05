<?php

namespace App\Http\Controllers;

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
}
