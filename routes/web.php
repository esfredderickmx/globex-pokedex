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

Route::view('/', 'pages.index')->name('index');
Route::view('/home', 'pages.index')->name('home');

Route::view('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms-and-conditions');
