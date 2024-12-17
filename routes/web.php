<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CsfController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Middleware\superAdminCheckCount;


Route::get('/', [RegisteredUserController::class, 'create']);


Route::get('super-admin/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('super-admin/register', [RegisteredUserController::class, 'store']);

Route::get('/customer-satisfaction-form', [ CsfController::class, 'index'])->name('csf.index');
Route::post('/customer-satisfaction-form/submitted', [ CsfController::class, 'store'])->name('csf.store');


Route::middleware(['auth'])->controller(SuperAdminController::class)->group(function(){
    Route::prefix('/super-admin')->group(function(){
        Route::get('/dashboard', 'index')->name('index.super-admin');
        Route::get('/customer-satisfaction-list', 'csfList')->name('super.list');
        Route::get('/settings/profile', 'profile')->name('super.profile');
        Route::get('/settings/office-details', 'officeDetails')->name('super.office');
        Route::get('/settings/office-details/create', 'office_create')->name('super.office.create');
        Route::post('/settings/office-details/create', 'office_store')->name('super.office.store');
        Route::get('/settings/office-details/{id}/edit', 'office_edit')->name('super.office.edit');
        Route::put('/settings/office-details/{id}/edit', 'office_edit_save')->name('super.office.edit-save');
        Route::get('/settings/personnel-list', 'personnelList')->name('super.personnel');

        Route::get('/settings/personnel-list/add-new-user', 'addNewPersonnel')->name('super.admin-add.new.user');
        Route::post('/settings/personnel-list/add-new-user', 'saveNewPersonnel')->name('super.admin-store.new.user');

        Route::get('/print-summary', 'printSummary')->name('print-summary');

        Route::get('/settings/set-control-number', 'control_number')->name('control.number');
        Route::get('/settings/set-control-number/set-new-control-no', 'setNew_control_number')->name('set-control.number');
        Route::post('/settings/set-control-number/set-new-control-no', 'store_control_number')->name('store-control.number');
    });

});


Route::middleware(['auth'])->controller(AdminController::class)->prefix('/admin')->group(function(){
    Route::get('/dashboard', 'index')->name('index.admin');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile');
    Route::get('/settings/office-details', 'officeDetails');
    Route::get('/settings/personnel-list', 'personnelList');
});


Route::middleware(['auth'])->controller(UserController::class)->prefix('/user')->group(function(){
    Route::get('/dashboard', 'index')->name('index.user');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile')->name('user.profile');
    Route::get('/settings/office-details', 'officeDetails');
    
    Route::put('/settings/profile/{id}', 'profile_update')->name('profile.update');
    
    Route::post('/print-summary', 'printSummary')->name('print-summary-user');
});


require __DIR__.'/auth.php';
