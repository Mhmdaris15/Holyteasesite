<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'content' => 'This is the content of the home page.',
    ]);
});

Route::get('/partnership', function () {
    return view('partnership', [
        'title' => 'Partnership',
        'content' => 'This is the content of the partnerships page.',
    ]);
});

Route::resource('products', ProductController::class);
