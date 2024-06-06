<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [BienController::class,'index']);

Route::get('/biens', [BienController::class, 'ListeBien']);

Route::get('biens/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);

// route pour la modification de biens
Route::post('/modifier/bien-traitement/', [BienController::class, 'ModifierBienTraitement']);
Route::get('/modifier-bien/{id}', [BienController::class, 'ModifierBien']);


//suppression
Route::get('/supprimer-bien/{id}', [BienController::class, 'SupprimerBien']);
Route::get('/detail-bien/{id}', [BienController::class, 'DetailBien'])->name("detail");

Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);



// route pour la modification des commentaires
Route::post('/modifier/commentaire-traitement/', [CommentaireController::class, 'ModifierCommentaireTraitement']);
Route::get('/modifier-commentaire/{id}', [CommentaireController::class, 'Commentaire']);

//route pour la suppression des commentaires
Route::get('/supprimer-commentaire/{id}', [CommentaireController::class, 'SupprimerCommentaire']);
