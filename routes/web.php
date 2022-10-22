<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyJobsController;
use App\Http\Controllers\FreelanceAuthController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', [HomeController::class,'index']);

Route::resource('/home',HomeController::class);
Route::resource('/company',CompanyController::class);
Route::resource('/freelance',FreelanceController::class);
Route::resource('/jobs',JobsController::class);
Route::resource('/payment',PaymentController::class);
Route::resource('/blog',BlogController::class);



Route::controller(UserController::class)->group(function(){
    Route::get('/freelancer','freelance_mode')->name('freelance-reg')->middleware('SignedIn');
    Route::get('/company','company_mode')->name('company-reg')->middleware('SignedIn');
    Route::get('/mode','index')->name('mode')->middleware('SignedIn');
    Route::post('/signup','register')->name('register');
    Route::post('/login','login')->name('login');
    Route::get('/showlogin','showlogin')->name('showlogin')->middleware('SignedIn');
    Route::get('/logout','logout')->name('logout')->middleware('logout');
    Route::get('/users/verify/{token}','verifyemail')->name('verification');
    Route::get('/user/passwordresetlink/{emial}','sendPasswordResetLink')->name('passwordresetlink');
    Route::post('/user/passwordrest/{token}','passwordreset')->name('passwordreset');
});
Route::controller(JobsController::class)->group(function(){
    Route::get('/appilication/{id}','apply')->name('apply');
    Route::post('/makeappilication','makeAppilication')->name('appilication');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/helpcenter','helpcenter')->name('helpcenter');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/privacy','privacy')->name('privacy');
    Route::get('/terms','terms')->name('terms');
    Route::get('/about','about')->name('about');
});


Route::controller(FreelanceController::class)->group(function(){
    Route::get('/bids','bids')->name('bids');
    Route::get('/bookmarks','bookmarks')->name('bookmarks');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/messages','messages')->name('messages');
    Route::get('/notification','notification')->name('notification');
    Route::get('/payments','payments')->name('payments');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/profile','profile')->name('profile');
    Route::get('/reviews','reviews')->name('reviews');
    Route::get('/search','search')->name('search');
    Route::get('/setting','setting')->name('setting');
    Route::get('/job','job')->name('job-personal');
});


Route::controller(CompanyController::class)->group(function(){
    Route::get('/members','members')->name('members');
    Route::get('/reviews','reviews')->name('reviews');
    Route::get('/freelancers','freelancers')->name('freelancers');
    Route::get('/profile','profile')->name('profile');
});
