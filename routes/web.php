<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('index'));
Route::get('/index', fn () => view('index'));
Route::get('/about', fn () => view('about'));
Route::get('/services', fn () => view('services'));
Route::get('/programs', fn () => view('programs'));
Route::get('/beapartner', fn () => view('beapartner'));
Route::get('/contact', fn () => view('contact'));
Route::get('/settings', fn () => view('settings'));
Route::get('/programsdb', fn () => view('programsdb'));


/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contacts.store');

Route::get('/message', [ContactController::class, 'index'])
    ->name('admin.message');


/*
|--------------------------------------------------------------------------
| Partner Requests
|--------------------------------------------------------------------------
*/

Route::post('/partner/store', [PartnerController::class, 'store'])
    ->name('partner.request.store');

Route::get('/partners', [PartnerController::class, 'index'])
    ->name('partners');


/*
|--------------------------------------------------------------------------
| Inquiry
|--------------------------------------------------------------------------
*/

Route::post('/inquiry', [InquiryController::class, 'store']);


/*
|--------------------------------------------------------------------------
| SIMPLE ADMIN LOGIN SYSTEM
|--------------------------------------------------------------------------
*/

// Show login page
Route::get('/admin', function () {

    if (Session::get('admin_logged_in')) {
        return redirect('/dashboard');
    }

    return view('login');
});

// Handle login
Route::post('/admin', function (Request $request) {

    if ($request->password === 'ADMIN123') {
        Session::put('admin_logged_in', true);
        return redirect('/dashboard');
    }

    return back()->with('error', 'Wrong password');
});

// Dashboard (Protected)
Route::get('/dashboard', function () {

    if (!Session::get('admin_logged_in')) {
        return redirect('/admin');
    }

    return app(DashboardController::class)->index();
});

// Logout (POST - Secure)
Route::post('/admin-logout', function () {
    Session::forget('admin_logged_in');
    return redirect('/');
})->name('admin.logout');