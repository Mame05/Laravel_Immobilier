<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [BienController::class,'index']);

Route::get('/biens', [BienController::class, 'ListeBien'])->middleware('auth');/* C'est à dire tant que on ne sait pas connecter on ne pourra pas acceder à cette route*/

Route::get('/biens/ajouter', [BienController::class, 'AjouterBien']);
Route::post('/ajouter/bien-traitement', [BienController::class, 'AjouterBienTraitement']);


// route pour la modification de biens
Route::post('/modifier/bien-traitement/', [BienController::class, 'ModifierBienTraitement']);
Route::get('/modifier-bien/{id}', [BienController::class, 'ModifierBien']);


//suppression
Route::get('/supprimer-bien/{id}', [BienController::class, 'SupprimerBien']);
// voir detail
Route::get('/detail-bien/{id}', [BienController::class, 'DetailBien']);

/*Ajout de commentaire*/
Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);

/*Modifier commentaire*/
Route::get('/modifier-commentaire/{id}', [CommentaireController::class, 'ModifierCommentaire']);
Route::post('/modifier/commentaire-traitement', [CommentaireController::class, 'ModifierCommentaireTraitement']);

/*supprimer commentaire  */

Route::get('/supprimer-commentaire/{id}', [CommentaireController::class, 'SupprimerCommentaire']);


   /*Connection*/
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authentification-login', [AuthController::class, 'AuthentificationLogin'])->name('authentification-login');

     /*Déconnection*/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
