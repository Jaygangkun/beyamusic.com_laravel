<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
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

Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'login_post']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/register', [PageController::class, 'register_post']);
Route::get('/logout', [PageController::class, 'logout']);

Route::group(['middleware' => 'usersession'], function () {
    Route::get('/', [DashboardController::class, 'genres']);
    Route::get('/home', [DashboardController::class, 'home']);

    Route::get('/genres', [DashboardController::class, 'genres']);
    Route::get('/genre/{genre_id}', [DashboardController::class, 'genre_details']);

    Route::get('/free-musics', [DashboardController::class, 'free_musics']);
    Route::get('/music/{music_id}', [DashboardController::class, 'music_details']);

    Route::get('/albums', [DashboardController::class, 'albums']);
    Route::get('/album/{album_id}', [DashboardController::class, 'album_details']);

    Route::get('/artists', [DashboardController::class, 'artists']);
    Route::get('/artist/{artist_id}', [DashboardController::class, 'artist_details']);

    Route::get('/favorites', [DashboardController::class, 'favorites']);
    Route::get('/history', [DashboardController::class, 'history']);
    Route::get('/add-music', [DashboardController::class, 'add_music']);
    Route::post('/add-music', [DashboardController::class, 'add_music_post']);
    Route::get('/profile', [DashboardController::class, 'profile']);
});


