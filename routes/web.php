<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;

use App\Models\customer_satisfaction;

use App\Http\Controllers\CsfController;



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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/customer-satisfaction-form', [ CsfController::class, 'index'])->name('csf.index');
Route::post('/customer-satisfaction-form/submitted', [ CsfController::class, 'store'])->name('csf.store');


Route::middleware(['auth', 'role:3'])->controller(SuperAdminController::class)->group(function(){
    Route::prefix('/super-admin')->group(function(){
        Route::get('/dashboard', 'index')->name('index');
        Route::get('/customer-satisfaction-list', 'csfList')->name('super.list');
        Route::get('/settings/profile', 'profile')->name('super.profile');
        Route::get('/settings/office-details', 'officeDetails')->name('super.office');
        Route::get('/settings/office-details/create', 'office_create')->name('super.office.create');
        Route::post('/settings/office-details/create', 'office_store')->name('super.office.store');
        Route::get('/settings/office-details/{id}/edit', 'office_edit')->name('super.office.edit');
        Route::put('/settings/office-details/{id}/edit', 'office_edit_save')->name('super.office.edit-save');
        Route::get('/settings/personnel-list', 'personnelList')->name('super.personnel');
    });
});


Route::middleware(['auth', 'role:2'])->controller(AdminController::class)->prefix('/admin')->group(function(){
    Route::get('/dashboard', 'index');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile');
    Route::get('/settings/office-details', 'officeDetails');
    Route::get('/settings/personnel-list', 'personnelList');
});


Route::middleware(['auth', 'role:1'])->controller(UserController::class)->prefix('/user')->group(function(){
    Route::get('/dashboard', 'index');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile');
    Route::get('/settings/office-details', 'officeDetails');
});


require __DIR__.'/auth.php';
