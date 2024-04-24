<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
});

require __DIR__.'/auth.php';


Route::get('/login', function() {
    return view('auth.login');
})->name('view.login');

Route::get('/register', function() {
    return view('auth.register');
})->name('view.register');