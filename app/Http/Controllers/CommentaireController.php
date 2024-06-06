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


            // modification Commentaire
            public function Commentaire($id)
            {
                $commentaires = Commentaire::findOrFail($id);
                return view('commentaires/modifiercom', compact('commentaires'));

            }

            public function ModifierCommentaireTraitement(Request $request)
            {
             // Validation si les donnees sont fournie
             $bien = Bien::find($request->bien_id);
                $request->validate([


                    'auteur' => 'required',
                    'contenu' => 'required',
                    'bien_id' => 'required',

                ]);

                $commentaire = Commentaire::findOrFail($request->id);
                $commentaire->auteur = $request->auteur;
                $commentaire->contenu = $request->contenu;
                $commentaire->bien_id = $request->bien_id;

                $commentaire->update();

                // return redirect()->back()->with('status', "Le commentaire a été modifier avec succés.");


                 return view('biens/detail',compact('bien'));
            }

                                // suppression


                                public function Supprimercommentaire($id)
                                {
                                    $commentaire = Commentaire::findOrFail($id);
                                    // Delete the database record
                                    $commentaire->delete();




                                    return redirect ()->back();
                                }



             }




