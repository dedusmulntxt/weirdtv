<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('tv');
});

Route::get('video', function () {
    return view('video');
});

Route::get('getvideo', [VideoController::class, 'getrandomvideo']);

Route::get('phone', function () {
    return view('phone');
});

Route::get('bubblediag1', function () {
    return view('bubblediag1');
});

Route::get('bubblediag2', function () {
    return view('bubblediag2');
});

Route::get('bubblediag3', function () {
    return view('bubblediag3');
});

Route::get('bubblediag4', function () {
    return view('bubblediag4');
});

Route::get('bubblediagregister', function () {
    return view('bubblediagregister');
});


//Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
Route::post('auth', [UserController::class, 'checklogin']);

Route::post('upload', [UploadController::class, 'upload']);