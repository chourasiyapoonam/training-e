<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::get('apilist' , [MyApi::class, 'list']);


 Route::get('apilist/{id}' , [MyApi::class, 'show']);
 Route::post('addlink' , [MyApi::class, 'add']); // for save the  data
 Route::put('updatedata/' , [MyApi::class , 'update']); // for update  route
 Route::get('searchdata/{$name}' , [MyApi::class , 'search']); // for search data
  Route::delete('deletedata/{id}' , [MyApi::class , 'delete']); // for delete data

