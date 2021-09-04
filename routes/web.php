<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {

    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

Auth::routes();
Route::redirect('/', 'login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {

        $pacientes = \App\Models\Paciente::all();
        $doctors = \App\Models\Doctor::all();
        $diaries = \App\Models\Diary::all();
        $users = \App\Models\User::all();

        return view('dashboard', compact('pacientes', 'doctors', 'diaries', 'users'));
    })->name('dashboard');

	Route::resource('/users', UserController::class);
    Route::resource('/doctors', DoctorsController::class);
    Route::resource('/pacientes', PacienteController::class);
    Route::resource('/diaries', DiaryController::class);

	//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

