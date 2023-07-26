<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TimestampsController;
use App\Http\Controllers\List_dataController;


Route::get('/home', [AuthorController::class, 'index'])->middleware('auth');
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/author/{author}',[AuthorController::class, 'bind']);
Route::prefix('book')->group(function () {
Route::get('/', [BookController::class, 'index']);
Route::get('/add', [BookController::class, 'add']);
Route::post('/add', [BookController::class, 'create']);
});
Route::get('/relation', [AuthorController::class, 'relate']);

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Route::post('/dashboard', 'IndexController@post');
// 追加
Route::post('/work_start', [TimestampsController::class, 'work_start'])->name('work_start');
Route::post('/work_end', [TimestampsController::class, 'work_end'])->name('work_end');
Route::post('/rest_start', [TimestampsController::class, 'rest_start'])->name('rest_start');
Route::post('/rest_end', [TimestampsController::class, 'rest_end'])->name('rest_end');
Route::get('/list_data', [List_dataController::class, 'list_data']);
// ここまで
Route::get('/auth', [AuthorController::class,'check']);
Route::post('/auth', [AuthorController::class,'checkUser']);
Route::get('/works', function() {
    return view('works');
});
Route::get('/date', function() {
    return view('date');
});
require __DIR__.'/auth.php';