<?php

  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlaygroundController;
use App\Http\Controllers\StripePaymentController;

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
    // Route::get('/waitingApprovalPlay', [PlaygroundController::class, 'indexWaiting'])->name('waitingApprovalPlay');
    Route::get('/denyApprovalPlay', [PlaygroundController::class, 'indexDeny'])->name('denyApprovalPlay');
    Route::get('/approvedPlay', [PlaygroundController::class, 'indexApproved'])->name('approvedPlay');
    Route::get('generate-pdf', [MemberController::class, 'generatePDF']);
    Route::get('generate-play-pdf', [PlaygroundController::class, 'generatePDF']);
    Route::get('generate-app-play-pdf', [PlaygroundController::class, 'generateAPlPDF']);
    Route::get('generate-den-play-pdf', [PlaygroundController::class, 'generateDPlPDF']);
    Route::get('generate-new-app-pdf', [MemberController::class, 'generateNewAppPDF']);
    Route::get('generate-new-approved-pdf', [MemberController::class, 'generateAppPDF']);
    Route::get('generate-new-denied-pdf', [MemberController::class, 'generateAppDPDF']);
    Route::get('generate-manager-pdf', [ManagerController::class, 'generateManagerPDF']);
    Route::get('generate-stadium-manager-pdf', [ManagerController::class, 'generateindexxxxPDF']);
    Route::get('generate-playground-manager-pdf', [ManagerController::class, 'generateindexxxPDF']);
    Route::get('generate-club-manager-pdf', [ManagerController::class, 'generateindexxPDF']);
    Route::get('playgroundStatus', [PlaygroundController::class, 'Status']);
    Route::resource('payments', StripePaymentController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('members', MemberController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('playground', PlaygroundController::class);
    
    Route::controller(StripePaymentController::class)->group(function(){
        Route::get('stripe', 'stripe');
        Route::post('stripe', 'stripePost')->name('stripe.post');
    });
});