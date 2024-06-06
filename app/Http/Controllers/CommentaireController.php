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


            // modification Commentaire
            public function Commentaire($id)
            {
                $biens = Commentaire::findOrFail($id);
                return view('commentaires/modifier', compact('commentaires'));

            }

            public function ModifierCommentaireTraitement(Request $request)
            {
             // Validation si les donnees sont fournie
                $request->validate([
                    'nom' => 'required',
                    'contenu' => 'required',
                    'date_ajout' => 'required',
                ]);

                $commentaire = Commentaire::findOrFail($request->id);
                $commentaire->nom = $request->nom;
                $commentaire->contenu = $request->contenu;
                $commentaire->date_ajout = $request->date_ajout;
                $commentaire->update();

                return redirect('/commentaire')->with('status', "Le commentaire a commentaire été modifié avec succés.");
            }

                                // suppression


                                public function Supprimercommentaire($id)
                                {
                                    $commentaire = Commentaire::findOrFail($id);
                                    // Delete the database record
                                    $commentaire->delete();

                                    return redirect()->back()->with('status', "Le commentaire a commentaire été supprimé avec succés.");
                                }



             }




