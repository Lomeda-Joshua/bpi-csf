<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CsfController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', function () {
    $auth_id = Auth::user();
    return view('auth.login', [ 'auth_id' => $auth_id ] );
});


Route::get('super-admin/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('super-admin/register', [RegisteredUserController::class, 'store']);

Route::get('/customer-satisfaction-form', [ CsfController::class, 'index'])->name('csf.index');
Route::post('/customer-satisfaction-form/submitted', [ CsfController::class, 'store'])->name('csf.store');


/*
 * 
 * Super admin middleware and routing
 * 
 */
Route::middleware(['auth', 'role:3'])->controller(SuperAdminController::class)->group(function(){
    Route::prefix('/super-admin')->group(function(){
        Route::get('/dashboard', 'index')->name('index.super-admin');
        Route::post('/dashboard/{id}', 'getIdForModal')->name('dashboard.getId');

        Route::get('/customer-satisfaction-list/summary', 'csfListSummary')->name('super.list');
        Route::get('/settings/profile', 'profile')->name('super.profile');

        // Add and delete Office details
        Route::get('/settings/office-details', 'offices')->name('super.office');
        Route::get('/settings/office-details/create', 'office_Create')->name('super.office.create');
        Route::post('/settings/office-details/create', 'office_Store')->name('super.office.store');
        Route::get('/settings/office-details/{id}/edit', 'office_edit')->name('super.office.edit');
        Route::put('/settings/office-details/{id}/edit', 'office_edit_save')->name('super.office.edit-save');
      

        // Add new authorized personnel
        Route::get('/settings/personnel-list', 'PersonnelList')->name('super.personnel');
        Route::get('/settings/personnel-list/add-new-user', 'AddNewPersonnel')->name('super.admin-add.new.user');
        Route::post('/settings/personnel-list/add-new-user', 'saveNewPersonnel')->name('super.admin-store.new.user');

        // Delete and restore deleted personnel
        Route::delete('/settings/personnel-list/delete-user/{id}', 'deletePersonnel')->name('super.admin-delete.user');
        Route::get('/settings/personnel-list/restore/source', 'restorePersonnelSource')->name('super.admin-restore.user');
        Route::post('/settings/personnel-list/restore', 'restorePersonnel')->name('super.admin-restore-user');

        // Assign user as focal
        Route::post('/settings/personnel-list/assign-user-focal/{id}', 'assignFocal')->name('super.admin-assign.focal');

        // Print Summary of csf lists
        Route::get('/print-summary', 'printSummary')->name('print-summary');

        // Add and set control number to an office for csf
        Route::get('/settings/set-control-number', 'controlNumber')->name('super.control.number');
        Route::get('/settings/set-control-number/set-new-control-no', 'setNewControlNumber')->name('super.set-control.number');
        Route::post('/settings/set-control-number/set-new-control-no', 'storeControlNumber')->name('super.store-control.number');
    });

});


/*
 * 
 * Admin middleware and routing
 * 
 */
Route::middleware(['auth', 'role:2'])->controller(AdminController::class)->prefix('/admin')->group(function(){
    Route::get('/dashboard', 'index')->name('index.admin');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile');
    Route::get('/settings/office-details', 'officeDetails');
    Route::get('/settings/personnel-list', 'personnelList');
});


/*
 * 
 * Regular user middleware and routing
 * 
 */
Route::middleware(['auth', 'role:1'])->controller(UserController::class)->prefix('/user')->group(function(){
    Route::get('/dashboard', 'index')->name('index.user');
    Route::get('/customer-satisfaction-list', 'csfList');
    Route::get('/settings/profile', 'profile')->name('user.profile');
    Route::get('/settings/office-details', 'officeDetails');

    Route::put('/settings/profile/{id}', 'profile_update')->name('profile.update');    
    Route::post('/print-summary', 'printSummary')->name('print-summary-user');
});




require __DIR__.'/auth.php';
