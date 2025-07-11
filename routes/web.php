<?php

use App\Models\EmailToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/sso-initiate/{email}', function ($email) {
    $result = EmailToken::where('email', $email)->first();
    return response()->json(['token' => $result->token]);
})->middleware('web');
