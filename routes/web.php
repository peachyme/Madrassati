<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('accueil');
// })->name('home');
Route::get('/formation/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('formation');

Auth::routes();

Route::get('/MesCandidatures', [App\Http\Controllers\client\CandidaturesController::class, 'index'])->name('candidat.candidatures');
Route::get('/MaCandidature/{id}', [App\Http\Controllers\client\CandidaturesController::class, 'show'])->name('candidat.candidature');
Route::post('/formation/postuler', [App\Http\Controllers\client\CandidaturesController::class, 'store'])->name('candidature.store');

Route::get('/MonDossier', [App\Http\Controllers\client\CandidatController::class, 'index'])->name('candidat.dossier');
Route::post('/MonDossier/saisirInfo', [App\Http\Controllers\client\CandidatController::class, 'storeCandidat'])->name('candidat.store');
Route::post('/MonDossier/saisirCursus', [App\Http\Controllers\client\CandidatController::class, 'storeCursus'])->name('candidat.storeCursus');


Route::post('admin/candidatures/{id}/valider', [App\Http\Controllers\CandidaturesController::class,'valider'])->name('voyager.candidature.valider');
Route::post('admin/candidatures/{id}/refuser', [App\Http\Controllers\CandidaturesController::class,'refuser'])->name('voyager.candidature.refuser');
Route::get('admin/candidatures/{id}/accepter', [App\Http\Controllers\CandidaturesController::class,'accepter'])->name('voyager.candidature.accepter');
Route::get('admin/candidaturesAcceptées', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.acceptées');
Route::get('admin/candidatures/{id}/attente', [App\Http\Controllers\CandidaturesController::class,'attente'])->name('voyager.candidature.attente');


Route::group(['prefix' => 'admin'], function () {
    Route::get('CreerSession',[App\Http\Controllers\SessionsController::class,'create'])->name('CreerSession');
    Voyager::routes();
});

Route::get('admin/candidatures_recues', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.recues');
Route::get('admin/candidatures_acceptees', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.acceptees');
Route::get('admin/candidatures_refusees', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.refusees');
Route::get('admin/candidatures_attentes', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.attentes');
Route::get('admin/candidatures_validees', [App\Http\Controllers\CandidaturesController::class,'index'])->name('voyager.candidatures.validees');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
