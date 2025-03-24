<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\BlogController;


//route for task given
// for static routes
Route::get('/test', function () {
    return view('welcome');
});

//for dynamic route
Route::get('/form/{name}', function($name){
    return "HELLO,$name WELCOME";
});

//route for form data
Route::get('/form', [PageController::class, 'showForm']);
Route::post('/submit', [PageController::class, 'submitForm'])->name('submit.form');












Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/store', [BlogController::class, 'store'])->name('blog.store');

