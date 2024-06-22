<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ViewOptionsController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/providers',[ProviderController::class,'show'])->name('providers');
Route::post('/providers/register',[ProviderController::class,'store'])->name('providers.register');


//


Route::controller(ViewOptionsController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.index');
    Route::get('/admin/dashboard/addproviders', 'addproviders')->name('admin.addproviders');
    Route::get('/admin/dashboard/services', 'services')->name('admin.services');
    Route::post('/admin/dashboard/addservices', 'addservices')->name('admin.addservices');
    Route::get('/admin/addservices', 'addservices')->name('admin.addservices');
    Route::get('/admin/dashboard/providers', 'providers')->name('admin.providers');
    Route::get('/admin/dashboard/users', 'users')->name('admin.users');
    Route::get('/admin/dashboard/requests', 'requests')->name('admin.requests');
});

//

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/login','log_form')->name('admin.log_form');
    Route::post('/admin/login', 'login')->name('admin.login');
    Route::get('/admin/dashboard/addproviders/reject/{id}','reject')->name('admin.reject');
    Route::get('/admin/dashboard/addproviders/confirm','confirm')->name('admin.confirm');
});
