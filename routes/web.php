<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DateChangeController;
use App\Http\Controllers\DJController;
use App\Http\Controllers\HallBookController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LocateController;
use App\Http\Controllers\LovlyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OurHallController;
use App\Http\Controllers\OurHallsController;
use App\Http\Controllers\OurSubHallController;
use App\Http\Controllers\SubHallController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('WeddingVenue.indexx');
// });
// Route::get('/login', function () {
//     return view('WeddingVenue.login');
// });
// Route::get('/signin', function () {
//     return view('WeddingVenue.signin');
// });
// Route::get('/about', function () {
//     return view('WeddingVenue.about');
// });
// Route::get('/contact', function () {
//     return view('WeddingVenue.contact');
// });
Route::get('/hall-single', function () {
    return view('WeddingVenue.hall-single');
});
// Route::get('/confirmation', function () {
//     return view('WeddingVenue.confirmation');
// });

// Route::get('/book', function () {
//     return view('WeddingVenue.booking');
// });




////Admin Routes
// Route::get('/admin', function () {
//     return view('Admin.dashboard');
// });
Route::get('/adminHalls', function () {
    return view('Admin.halls');
});
Route::get('/adminUsers', function () {
    return view('Admin.users');
});
Route::get('/adminSubHalls', function () {
    return view('Admin.subHalls');
});
Route::get('/adminBooking', function () {
    return view('Admin.booking');
});
Route::get('/adminMessages', function () {
    return view('Admin.messages');
});
// Route::get('/login', function () {
//     return view('WeddingVenue.login');
// });
Route::get('/register', function () {
    return view('WeddingVenue.signin');
});



Route::resource('Users', UserController::class);
Route::resource('Halls', HallController::class);
Route::resource('SubHalls', SubHallController::class);
Route::resource('messages', MessageController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('booking', BookingController::class);
Route::get('/Hall/{hal}', [OurHallController::class, 'getHalls'])->name('hall');
Route::get('/book', [HallBookController::class, 'getbooks'])->name('book');
Route::get('/confirmation', [ConfirmationController::class, 'confirmation'])->name('confirmation');
Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');
Route::get('/SingleHall/{subhal}', [OurSubHallController::class, 'getSubHalls'])->name('singlehall');
Route::put('/checkAndBook/{subhal}/{day}/{time}', [OurSubHallController::class, 'checkAndBook'])->name('checkAndBook');
Route::get('/dateChange/{subhal}', [DateChangeController::class, 'dateChange'])->name('dateChange');
Route::resource('/', HomePageController::class);
Route::resource('blogSingle', BlogController::class);
Route::resource('lovelyDecoration', LovlyController::class);
Route::resource('liveMusicAndDj', DJController::class);
Route::resource('Locate', LocateController::class);
// Route::get('/blog-single', function () {
//     return view('WeddingVenue.blog-single');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexx'])->name('home');
