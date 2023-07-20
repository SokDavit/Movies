<?php

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

// SIGNUP PAGE
Route::get('/', function () {
    return view('movies.index');
});
// SIGNUP
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/login', [UserController::class, 'login'])->name('login');
// SIGNIN
Route::get('/signin', function(){
    return view('movies.signin');
});
// FORGOT PASSWORD
Route::get('/forgotpassword', function() {
    return view('movies.signup.forgotpassword');
});

// USER LOGIN 
Route::group(['middleware'=>['login.checker']], function(){
    Route::get('/paymentPicker', function() {
        return view('movies.signup.paymentPicker');
    });
    Route::get('/creditoption', function() {
        return view('movies.signup.creditoption');
    });
    Route::get('/paymentSuccessfuly', function(){
        return view('movies.signup.paymentSuccesfuly');
    });

});
Route::get('/movies', function(){
    return view('movies.logged.index');
});
Route::get('/movies-2', [MoviePlayController::class, 'movies']);
Route::get('/tv-show', [MoviePlayController::class, 'tv_show']);
Route::get('/show', function() {
    return view('movies.logged.show');
});
Route::get('/play/{id}', function() {
    return view('movies.logged.play');
});
// ADMIN LOGIN
Route::group(['middleware'=>['admin.checker']], function(){
    Route::get('/admin/dashboard', function() {
        return view('admin.layout.master');
    });
});

Route::get('/admin', function() {
    return view('admin.index');
});




