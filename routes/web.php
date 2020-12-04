<?php

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

Route::get('file-upload', function () {
    return view('imgupload');
});

// Route::get('file-upload', function () {
//     return view('fileupload');
// });

Route::get('user-datatables', function () {
    return view('userdata');
});

Route::get('contacts', function () {
    return view('contacts');
});

Route::get('load-more-user', function () {
    return view('loadmoreuser');
});

Route::get('wizard', function () {
    return view('wizard');
});

// Route::get('products', function () {
//     return view('products');
// });