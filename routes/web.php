<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/users', function () {
    $users = User::orderBy('id', 'desc')->paginate(10);

    return view('users.index', compact('users'));
});