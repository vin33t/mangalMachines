<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('home');
})->name('home');

Route::get('/about-us/', function () {
    return view('about-us');
})->name('about-us');

Route::get('/process/', function () {
    return view('process');
})->name('process');

Route::get('/infrastructure/', function () {
    return view('infrastructure');
})->name('infrastructure');

Route::get('/clientele/', function () {
    return view('clientele');
})->name('clientele');

Route::get('/new-openings/', function () {
    return view('new-openings');
})->name('new-openings');

Route::get('/contact-us/', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/mixing-section-machinery/', function () {
    return view('products/mixing-section-machinery');
})->name('mixing-section-machinery');

Route::get('/dough-feeding-section/', function () {
    return view('products/dough-feeding-section');
})->name('dough-feeding-section');

Route::get('/forming-section-machinery/', function () {
    return view('products/forming-section-machinery');
})->name('forming-section-machinery');

Route::get('/biscuit-rotary-cutting-machines/', function () {
    return view('products/biscuit-rotary-cutting-machines');
})->name('biscuit-rotary-cutting-machines');

Route::get('/oven/', function () {
    return view('products/oven');
})->name('oven');

Route::get('/cooling-section-machinery/', function () {
    return view('products/cooling-section-machinery');
})->name('cooling-section-machinery');

Route::get('/ancilliary-machinery/', function () {
    return view('products/ancilliary-machinery');
})->name('ancilliary-machinery');



Auth::routes();


Route::get('authenticated', [AdminController::class,'index'])->name('admin');
Route::get('pages', [AdminController::class,'getPages'])->name('get-pages');
Route::get('add-new-page', [AdminController::class,'addNewPage'])->name('add-new-page');
Route::post('save-new-page', [AdminController::class,'saveNewPage'])->name('save-new-page');



