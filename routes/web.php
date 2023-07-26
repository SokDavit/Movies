<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmController;
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

//---------------------------------------------------LOGIN ADMIN-------------------------------------------------------------------------------------
Route::get('/admin/login-form', [LoginAdminController::class, 'loginForm'])->name('admin.login-form');
Route::post('/admin/login', [LoginAdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
// MOVIES DASHBOARD
Route::get('/admin/movie', [AdminController::class, 'movie'])->name('admin.movie.index');
Route::get('/admin/movie/film', [FilmController::class, 'index'])->name('admin.movie.film');
Route::get('/admin/movie/film/add', [AdminController::class, 'film_add'])->name('admin.movie.film.add');
Route::get('/admin/movie/film/{id}', [AdminController::class, 'film_view'])->name('admin.movie.film.view');
Route::get('/admin/movie/tv-show', [AdminController::class, 'tv_show'])->name('admin.movie.tv-show');
Route::get('/admin/movie/tv-show/{id}', [AdminController::class, 'tv_show_view'])->name('admin.movie.tv-show.view');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/feedback', [AdminController::class, 'feedback'])->name('admin.feedback');

// MIDDLEWARE ADMIN
Route::group(['middleware' => ['admin.checker']], function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });
    Route::get('/admin/movie/index', function () {
        return view('admin.movies.index');
    })->name('admin.movie');
    Route::get('/admin/movie/film/index', function () {
        return view('admin.movies.film.index');
    });
    Route::get('/admin/movie/tv-show/index', function () {
        return view('admin.movies.tv-show.index');
    });
    Route::get('/movie/film/add', function () {
        return view('admin.movies.film.add');
    });
    Route::get('/admin/user/index', function(){
        return view('admin.user.index');
    });
    Route::get('/admin/feedback/index', function(){
        return view('admin.feedback.index');
    });
});

//-------------------------------------------------------LOGIN USER MOVIES------------------------------------------------------------------------------------
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
Route::get('/password', [UserController::class, 'regForm'])->name('regForm');
// REGISTER FORM
Route::get('/regForm', function () {
    return view('movies.signup.regForm');
});
// HIGHLIGHT CHOOSE YOUR PLAN
Route::get('/signup', function () {
    return view('movies.signup.choosecredit');
})->name('chooseplan');
// SUBSCRIPTION PLATFORM
Route::get('/signup/platform', function () {
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
Route::get('/show/{id}', [MoviePlayController::class, 'movie_show'])->name('show');
Route::get('/movies', [MoviePlayController::class, 'index'])->name('movies');
Route::get('/movies-2', [MoviePlayController::class, 'movies']);
Route::get('/tv-show', [MoviePlayController::class, 'tv_show']);
Route::get('/play/{id}', [MoviePlayController::class, 'movie_play'])->name('play');
Route::post('/search', [MoviePlayController::class, 'movie_search'])->name('search');
Route::get('/result', [MoviePlayController::class, 'result'])->name('result');
// MIDDLEWARE MOVIES
Route::group(['middleware' => ['login.checker']], function () {
});
