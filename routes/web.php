<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Storage;

//Route::get('/', function () {
  //  return view('home.index');
//});


Route::get('/',[HomeController::class,'index']);

Route::post('/upload_post',[HomeController::class,'upload']);

Route::get('/view_post',[HomeController::class,'view_post']);

Route::get('/delete_post/{id}',[HomeController::class,'delete_post']);

Route::post('update_post/{id}', [HomeController::class, 'update'])->name('update.post');


Route::post('/confirm_update/{id}', [HomeController::class, 'confirm_update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});