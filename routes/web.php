<?php

use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;


Route::get('/forum', [ForumController::class, 'index'])->name('index');

Route::get('/contact', function () {
    return view('site/contact');
});

Route::get('/', function () {
    return view('welcome');
});
?>
