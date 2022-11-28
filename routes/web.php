<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

#composer --dump-autoload
#php -a (Comando para rodar php no terminal)

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
#Route::get('posts',\App\Http\Controllers\PostController::class);
/* Route::get('posts', [PostController::class, 'index']);
Route::get('create', [PostController::class, 'create']);
Route::get('store', [PostController::class, 'store']);
Route::get('show', [PostController::class, 'show']);
Route::get('edit', [PostController::class, 'edit']);
Route::get('update', [PostController::class, 'update']);
Route::get('destroy', [PostController::class, 'destroy']); */