<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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
    //resouces/views/welcome.blade.php ビューが表示
    return view('welcome');
});


// ルーティング後は、コントローラーに任せる
// HomeController
Route::get('/about', [HomeController::class, 'about']);
Route::get('/search', [HomeController::class, 'search']);
// ItemController
Route::get('/item/{id}', [ItemController::class, 'show']);
Route::get('/dp/{id}', [ItemController::class, 'show']);

// ↓ ルーティングしたのでコメントアウト
// aboutページの追加 23-10-06 3.week3 23-10-13 3.week4
// Route::get('/about', function () {
//     // return "About Page!!";
//     return view('about'); // about.blade.php を表示
// });

// Route::get('/item/{id}', function ($id) {
//     $message = "商品IDは{$id}";
//     return $message;
// });

// // Amazonの商品のようなルーティング 
// Route::get('/dp/{id}', function ($id) {
//     $message = "商品IDは{$id}";
//     return $message;
// });

// // URLから直接アクセスできない
// Route::post('/hello', function () {
//     $message = "こんにちは";
//     return $message;
// });

// GooGle検索のようなルーティング 23-10-06 3.week3
// Route::get('/search', function (Request $request) { // Request: [Illuminate\Http]
//     // dd($request); // dd: デバッグ
//     // $keyword = $request->q; // q ← クエリパラメータ
//     // $message = "キーワードは{$keyword}です";
//     // return $message;

//     // 連想配列データ
//     $data = [
//         'keyword' => $request ->q
//     ];
//     // viewファイルにデータを渡す
//     return view('search', $data);
// });
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
