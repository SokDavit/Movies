<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\MoviePlayController;
use App\Http\Controllers\UserController;
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

// LOGIN ADMIN
Route::get('/admin/login-form', [LoginAdminController::class, 'loginForm'])->name('admin.login-form');
Route::post('/admin/login', [LoginAdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
// MIDDLEWARE ADMIN
Route::group(['middleware' => ['admin.checker']], function () {
    Route::get('/admin', function () {
        return Redirect()->route('admin');
    });
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('admin');
    Route::get('/admin/movies', function () {
        return view('admin.movies.index');
    })->name('admin.movies');
});
//------------------------------------------------------------------------------------------------------------------------------------------------------------------
// LOGIN MOVIES
Route::get('/', [UserController::class, 'loginForm'])->name('movies.login-form');
Route::get('/signin', [UserController::class, 'signIn'])->name('signin');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/movies/logout', [UserController::class, 'logout'])->name('user.logout');
// SIGNIN

// FORGOT PASSWORD
Route::get('/forgotpassword', function () {
    return view('movies.signup.forgotpassword');
});

// MIDDLEWARE MOVIES 
Route::group(['middleware' => ['login.checker']], function () {
    Route::get('/paymentPicker', function () {
        return view('movies.signup.paymentPicker');
    });
    Route::get('/creditoption', function () {
        return view('movies.signup.creditoption');
    });
    Route::get('/paymentSuccessfuly', function () {
        return view('movies.signup.paymentSuccesfuly');
    });

    Route::get('/movies', [MoviePlayController::class, 'index'])->name('movies');
    Route::get('/movies-2', [MoviePlayController::class, 'movies']);
    Route::get('/tv-show', [MoviePlayController::class, 'tv_show']);
    Route::get('/show', function () {
        return view('movies.logged.show');
    });
    Route::get('/play/{id}', [MoviePlayController::class, 'video-play'])->name('video-play');
        
});
