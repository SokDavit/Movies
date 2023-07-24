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

//--------------------------------------------------------------------LOGIN ADMIN-------------------------------------------------------------------------------------
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

//--------------------------------------------------------------------LOGIN MOVIES------------------------------------------------------------------------------------
Route::get('/', [UserController::class, 'loginForm'])->name('movies.login-form');
Route::get('/signin', [UserController::class, 'signIn'])->name('signin');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/movies/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/regExist', [UserController::class, 'regExist'])->name('reg-exist');
Route::post('/register', [UserController::class, 'register'])->name('register');
// SIGNIN

// FORGOT PASSWORD
Route::get('/forgotpassword', function () {
    return view('movies.signup.forgotpassword');
});
// SIGNIN EXIST
Route::get('/password',[UserController::class, 'regForm'])->name('regForm');
// REGISTER FORM
Route::get('/regForm',function(){
    return view('movies.signup.regForm');
});
// HIGHT CHOOSE YOUR PLAN
Route::get('/signup', function(){
    return view('movies.signup.choosecredit');
})->name('chooseplan');
// SUBSCRIPTION PLATFORM 
Route::get('/signup/platform', function(){
    return view('movies.signup.platform');
});
// PAYMENT
Route::get('/signup/paymentPicker', function () {
    return view('movies.signup.paymentPicker');
})->name('paymenPicker');
Route::get('/signup/creditoption', function () {
    return view('movies.signup.creditoption');
})->name('creditoption');;
Route::get('/paymentSuccessfuly', function () {
    return view('movies.signup.paymentSuccesfuly');
});

// MIDDLEWARE MOVIES 
Route::group(['middleware' => ['login.checker']], function () {
    
    
    Route::get('/movies', [MoviePlayController::class, 'index'])->name('movies');
    Route::get('/movies-2', [MoviePlayController::class, 'movies']);
    Route::get('/tv-show', [MoviePlayController::class, 'tv_show']);
    Route::get('/show/{id}',[MoviePlayController::class, 'movie_show'])->name('show');
    Route::get('/play/{id}', [MoviePlayController::class, 'movie_play'])->name('play');
    Route::post('/search', [MoviePlayController::class, 'movie_search'])->name('search');
    Route::get('/result', [MoviePlayController::class, 'result'])->name('result');
});

