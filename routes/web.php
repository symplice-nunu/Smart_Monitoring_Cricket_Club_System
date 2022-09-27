<?php

  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/clubManager', [ManagerController::class, 'indexx'])->name('clubManager');
    Route::get('/playgroundManager', [ManagerController::class, 'indexxx'])->name('playgroundManager');
    Route::get('/stadiumManager', [ManagerController::class, 'indexxxx'])->name('stadiumManager');
    Route::get('/waitingApproval', [MemberController::class, 'indexWaiting'])->name('waitingApproval');
    Route::get('/denyApproval', [MemberController::class, 'indexDeny'])->name('denyApproval');
    Route::get('/approved', [MemberController::class, 'indexApproved'])->name('approved');
    Route::get('/updatee', [MemberController::class, 'updatee'])->name('updatee');
    Route::get('generate-pdf', [MemberController::class, 'generatePDF']);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('members', MemberController::class);
    Route::resource('managers', ManagerController::class);

});