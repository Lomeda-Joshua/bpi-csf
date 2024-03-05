<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::controller(CsfController::class)->group(function(){
    Route::get('/information-&-computer-section/customer-satisfaction-form', 'informationComputerSection');
    Route::get('/human-resources-section/customer-satisfaction-form', 'humanResourcesSection');
});

Route::post('/customer-satisfaction-form/submitted', [ CsfController::class, 'store'])->name('general.store');


Route::middleware(['auth', 'role:2'])->controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard', 'index');
    Route::get('/admin/customer-satisfaction-list', 'csfList');
    Route::get('/admin/settings/profile', 'profile');
    Route::get('/admin/settings/office-details', 'officeDetails');
    Route::get('/admin/settings/personnel-list', 'personnelList');
});


Route::middleware(['auth', 'role:1'])->controller(UserController::class)->group(function(){
    Route::get('/user/dashboard', 'index');
    Route::get('/user/customer-satisfaction-list', 'csfList');
    Route::get('/user/settings/profile', 'profile');
    Route::get('/user/settings/office-details', 'officeDetails');
});




require __DIR__.'/auth.php';
