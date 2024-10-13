<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PromotionBookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\EmployeeScheduleController;
use App\Http\Controllers\PackageBookingController;



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

Route::get('/home', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/show-promotions', function () {
    return view('show-promotions');
});

Route::get('/date', function () {
    return view('date');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/bookingp', function () {
    return view('bookingp');
});

Route::get('/bookingpac', function () {
    return view('bookingpac');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/formregister', function () {
    return view('formregister');
});

Route::get('/formbooking', function () {
    return view('formbooking');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/pro', function () {
    return view('\pro');
});

Route::get('/history', function () {
    return view('\history');
});

Route::get('/contacts', function () {
    return view('\contacts');
});
#admin
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

#users
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
// routes/web.php

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // เปลี่ยนเส้นทางไปที่หน้า login
})->name('logout');

// In routes/web.php

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// routes/web.php


// routes/web.php
Route::resource('bookings', BookingController::class);
Route::post('/bookings/update-status', [BookingController::class, 'updateStatus'])->name('bookings.update.status');
Route::get('/booking/details', [BookingController::class, 'create'])->name('booking.details');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/history/{customerId}', [BookingController::class, 'customerBookings'])->name('bookings.history');
Route::get('/history', [BookingController::class, 'history'])->name('booking.history');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
Route::get('/confirmed-bookings', [BookingController::class, 'confirmedBookings'])->name('bookings.confirmed');
Route::get('/bookings/canceled', [BookingController::class, 'canceledBookings'])->name('bookings.canceled');


Route::resource('services', ServiceController::class);
Route::get('/service', [ServiceController::class, 'showServices'])->name('service.show');


Route::resource('times', TimeController::class);
Route::get('/time', [TimeController::class, 'index'])->name('time.index');
Route::put('/times/{id}', [TimeController::class, 'update'])->name('times.update');


Route::resource('employees', EmployeeController::class);
Route::get('/', [EmployeeController::class, 'showEmployees'])->name('welcome');

Route::resource('schedules', EmployeeScheduleController::class);

Route::get('/show-promotions', [PromotionController::class, 'showPromotions'])->name('promotions.show');
Route::resource('promotions', PromotionController::class);
Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions.index');

Route::resource('promotion_bookings', PromotionBookingController::class);
Route::post('/promotion_bookings', [PromotionBookingController::class, 'store'])->name('promotion_bookings.store');
Route::get('/promotion-bookings/list', [PromotionBookingController::class, 'listBookings'])->name('promotion_bookings.list');
Route::post('/submit-promotion-booking', [BookingController::class, 'storeBooking'])->name('your_booking_route');

// Route for listing packages
Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');

// Route for creating a new package (optional)
Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');

// Route for storing a new package (optional)
Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');

// Route for editing a package (optional)
Route::get('/packages/{id}/edit', [PackageController::class, 'edit'])->name('packages.edit');

// Route for updating a package (optional)
Route::put('/packages/{id}', [PackageController::class, 'update'])->name('packages.update');

// Route for deleting a package (optional)
Route::delete('/packages/{id}', [PackageController::class, 'destroy'])->name('packages.destroy');

Route::resource('package-bookings', PackageBookingController::class);
// Alternatively, you can define routes explicitly
Route::get('/package-bookings', [PackageBookingController::class, 'index'])->name('package-bookings.index');
Route::get('/package-bookings/create', [PackageBookingController::class, 'create'])->name('package-bookings.create');
Route::post('/package-bookings', [PackageBookingController::class, 'store'])->name('package-bookings.store');
Route::get('/package-bookings/edit', [PackageBookingController::class, 'edit'])->name('package.bookings.edit');
Route::put('/package-bookings', [PackageBookingController::class, 'update'])->name('package-bookings.update');
Route::delete('/package-bookings', [PackageBookingController::class, 'destroy'])->name('package-bookings.destroy');

Route::resource('customers', CustomerController::class);
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

Route::resource('contact', ContactController::class);
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contact.show');
