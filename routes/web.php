<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [BienController::class,'index']);

Route::get('/bien', [BienController::class, 'ListeBien']);

Route::get('bien/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);

<<<<<<< HEAD

// route pour la modification de biens
Route::post('/modifier/bien-traitement/', [BienController::class, 'ModifierBienTraitement']);
Route::get('/modifier-bien/{id}', [BienController::class, 'ModifierBien']);


//suppression
Route::get('/supprimer-bien/{id}', [BienController::class, 'SupprimerBien']);
=======
Route::get('/detail-bien/{id}', [BienController::class, 'DetailBien']);

Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);
>>>>>>> 57c8ca9 (Création de la route et de la fonction pour l'ajout des commentaires et implémentation du formulaire d'ajout de commentaire dans la vue detail)
