<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/about-us', function () {
//     return view('about-us');
// });

Route::get('/about-us', [ PagesController::class, 'aboutUsPage' ])->name('about');
Route::get('/contact-us', [ PagesController::class, 'contactUsPage' ])->name('contact');
Route::get('/welcome', [ PagesController::class, 'welcomePage' ])->name('index');
