<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PDFController;



Route::get('/', function(){
  return view('forms');
})->name('home');

Route::get('/admin/login', function() {
  return view('auth.login');
})->name('admin-login');



Route::group(['middleware' => 'auth'], function(){
  Route::get('/user/dashboard', function(){
    return view('user-dashboard');
  })->name('user-dashboard');
  Route::get('/create-pdf-file', [PDFController::class, 'index']);
  Route::resource('dashboard', DashboardController::class);
  Route::resource('users', UserController::class);
  Route::resource('roles', RolesController::class);
  Route::resource('permissions', PermissionsController::class);
  Route::resource('forms', ApplicationFormController::class);
});

require __DIR__.'/auth.php';
