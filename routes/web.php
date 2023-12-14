<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\UserIndex;
use App\Livewire\Register;
use App\Livewire\Login;

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

Route::view('/', 'layouts.app')->middleware('auth')->name('home');

Route::get('/', UserIndex::class)->middleware('auth')->name('home');
Route::get('/user-index', UserIndex::class)->middleware('auth');
Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');