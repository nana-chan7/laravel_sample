<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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

// aboutページの追加 23-10-06 3.week3
Route::get('/about', function () {
    return "About Page!!";
});

// Amazonの商品のようなルーティング 23-10-06 3.week3
Route::get('/item/{id}', function ($id) {
    $message = "商品IDは{$id}";
    return $message;
});

// GooGle検索のようなルーティング 23-10-06 3.week3
Route::get('/search', function (Request $request) { // Request: [Illuminate\Http]
    // dd($request); // dd: デバッグ
    $keyword = $request->q; // q ← クエリパラメータ
    $message = "キーワードは{$keyword}です";
    return $message;
});
// $request->q : java, pythonだと request.q という表記ができるが phpでは出来ない
// ※ php だと ドット(.)は +(文字列結合)と同じに意味になる 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
