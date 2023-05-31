<?php

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

Route::get('/hello', function () {
    return '<h1>Hello laravel</h1>';
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/store', function () {
//     $category = request('category');

//     if (isset($category)) {
//         return 'Welcome to the ' . strip_tags($category) . ' store';
//     }

//     return 'Welcome to the instruments store';
// });

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {
        if (isset($item)) {
            return "You are viewing the {$item} item on the {$category} category";
        }

        return 'Welcome to the ' . strip_tags($category) . ' store';
    }

    return 'Welcome to the instruments store';
});
