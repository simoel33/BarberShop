<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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


Route::get('/', function () {
    return view('index');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/salon', function () {
    return view('salon');
});

Route::get('/nostarifs', [FrontController::class, 'allServies']);

Route::get('/tarifs', [FrontController::class, 'tarif']);


Route::get('/nav', function () {
    return view('admin.sidebar');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/gellry', function () {
    return view('galery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pp', function () {
    return view('mp');
});




Route::post('/contact', [FrontController::class, 'Mesage'])->name('get.message');


Route::get('addserice', [ServiceController::class, 'AddService']);
Route::post('addserice', [ServiceController::class, 'AddServicefromPost'])->name('add.service');



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//
Route::middleware('auth')->get('/allServies', [App\Http\Controllers\ServiceController::class, 'allServies'])->name('all.service');

Route::middleware('auth')->get('/ajouterService', [App\Http\Controllers\ServiceController::class, 'AjouterService'])->name('ajouter.service');
Route::post('/ajouterService', [App\Http\Controllers\ServiceController::class, 'AjouterServicefromPost'])->name('post.service');
Route::middleware('auth')->get('/modifier/{i}', [App\Http\Controllers\ServiceController::class, 'ModifierService'])->name('modifier.service');

Route::post('/modifier/', [App\Http\Controllers\ServiceController::class, 'ModifierServicefromPost'])->name('edite.service');

Route::middleware('auth')->get('/supprimer/{i}', [App\Http\Controllers\ServiceController::class, 'deleteata'])->name('suprimer.service');



//forfaits routes
Route::middleware('auth')->get('/allForfaits', [App\Http\Controllers\ForfaitController::class, 'allForfaits'])->name('all.forfait');
Route::middleware('auth')->get('/ajouterforfait', [App\Http\Controllers\ForfaitController::class, 'AjouterForfait'])->name('ajouter.forfait');
Route::post('/ajouterforfait', [App\Http\Controllers\ForfaitController::class, 'AjouterforfaitfromPost'])->name('post.forfait');

Route::middleware('auth')->get('/modifierforfait/{i}', [App\Http\Controllers\ForfaitController::class, 'ModifierForfait'])->name('modifier.forfait');
Route::post('/modifierforfait/', [App\Http\Controllers\ForfaitController::class, 'ModifierForfaitfromPost'])->name('edite.forfait');
Route::middleware('auth')->get('/supprimerforfait/{i}', [App\Http\Controllers\ForfaitController::class, 'deletforfait'])->name('suprimer.forfait');


Route::get('/ft', [FrontController::class, 'allForfaits']);

Route::middleware('auth')->get('/showmessages', [App\Http\Controllers\ForfaitController::class, 'Showmessages'])->name('show.messages');
Route::middleware('auth')->get('/supprimermessage/{id}', [App\Http\Controllers\ForfaitController::class, 'SupprimerMessage'])->name('show.messages');


//Collection Routes

Route::middleware('auth')->get('/allCollections', [App\Http\Controllers\CollectionController::class, 'allCollections'])->name('all.collection');
Route::middleware('auth')->get('/AjouterCollection', [App\Http\Controllers\CollectionController::class, 'AjouterCollection'])->name('ajouter.coll');

Route::post('/AjouterCollection', [App\Http\Controllers\CollectionController::class, 'AjouterCollectionfromPost'])->name('post.collection');


Route::middleware('auth')->get('/supprimercollection/{i}', [App\Http\Controllers\CollectionController::class, 'supprimercollection'])->name('suprimer.collection');

Route::middleware('auth')->get('/modifiercollection/{i}', [App\Http\Controllers\CollectionController::class, 'modifiercollection'])->name('modifier.collection');

Route::post('/modifiercollection/', [App\Http\Controllers\CollectionController::class, 'ModifierCollectiontfromPost'])->name('edite.col');
