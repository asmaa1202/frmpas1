<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlongeurController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', [PlongeurController::class, 'loginUser']);


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', [PlongeurController::class, 'infoPlongeur']);
    Route::get('/user/cours/{id_niveau}', [PlongeurController::class, 'coursPlongeurApi']);
    Route::get('/niveaux', [PlongeurController::class, 'getNiveaux']);
    Route::get('/calendriers', [PlongeurController::class, 'getCalendriers']);
    Route::get('/blogs', [PlongeurController::class, 'getBlogs']);
    Route::get('/exercices/plongeur/niveau/{id_niveau}', [PlongeurController::class, 'getExercicesParPlongeur']);
    Route::post('/accepterOuRefuserCalendrier', [PlongeurController::class, 'accepterOuRefuserCalendrier']);
    Route::get('/carnets-de-plongee', [PlongeurController::class, 'getCarnetDePlongee']);
    Route::get('logout', [PlongeurController::class, 'logout']);
});