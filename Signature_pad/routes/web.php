<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignatureController;

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
    return view('welcome');
});
Route::get('/laravel-signature-pad' , [SignatureController::class , 'index']);
// this route is for showing the blade template
//Route::get('laravel-signature-pad' , 'SignatureController@index');
//oute::post('laravel-signature-pad' , 'SignatureController@store');
// this is for save image route after clicking on submit button
Route::post('/laravel-signature-pad' , [SignatureController::class , 'store']);
