<?php

use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dimm', function () {
//     return view('dimm');
// });

// Qur an
Route::get('/dimm',[QuranController::class,'index']);

Route::get('/dimm/{id}',[QuranController::class,'indexId']);
