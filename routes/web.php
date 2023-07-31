<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FirstNewsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


Route::get('/allnews2', function () {
    return view('allnews2');
});



Route::get('/contact', [ContactFormController::class, 'showForm'])->name('show.form');
Route::post('/submit-form', [ContactFormController::class, 'submitForm'])->name('submit.form');

// Halaman input berita
// Route::get('/news/input', [NewsController::class, 'input'])->name('news.input');
// Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');

// Halaman daftar view berita
// Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Halaman view berita keseluruhan
// Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


// Breaking News
Route::get('/breaking_news', function () {
    return view('allnews.breaking');
});
Route::get('/post1', function () {
    return view('allnews.post1');
});
Route::get('/donate', function () {
    return view('donate');
});
