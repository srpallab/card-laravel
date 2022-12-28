<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function(){
  return view('forms');
})->name('home');

Route::group(['middleware' => 'auth'], function(){
  Route::resource('dashboard', DashboardController::class);
  Route::resource('users', UserController::class);
  Route::resource('roles', RolesController::class);
  Route::resource('permissions', PermissionsController::class);
  Route::resource('forms', ApplicationFormController::class);
});

require __DIR__.'/auth.php';
