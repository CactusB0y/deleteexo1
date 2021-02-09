<?php

use App\Http\Controllers\MembreController;
use App\Models\Membre;
use Illuminate\Support\Facades\Route;

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
    $membres = Membre::all();
    return view('welcome',compact('membres'));
});
Route::get('/femme', function () {
    $femmes = Membre::where('genre', '=', 'femme')->get();
    return view('femme',compact('femmes'));
});
Route::get('/homme', function () {
    $hommes = Membre::where('genre', '=', 'homme')->take(5)->get();
    return view('homme',compact('hommes'));
});
Route::get('/create',[MembreController::class, 'create']);
Route::post('/membre-store',[MembreController::class, 'store']);
Route::post('/delete-membre/{id}',[MembreController::class, 'destroy']);
