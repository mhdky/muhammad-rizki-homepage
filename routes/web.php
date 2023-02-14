<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardPortfolioController;
use App\Http\Controllers\DashboardSkillController;
use App\Http\Controllers\DashboardSocialController;
use App\Http\Controllers\SigninController;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Social;
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

Route::get('/', function () {
    return view('home', [
        'medsos' => Social::first(),
        'about' => About::first(),
        'skill' => Skill::first(),
        'portfolios' => Portfolio::latest()->get(),
    ]);
});

Route::get('/admin', [SigninController::class, 'index'])->middleware('guest')->name('login');
Route::post('/admin', [SigninController::class, 'authenticate']);
Route::post('/signout', [SigninController::class, 'signout']);

Route::post('/contact', [ContactController::class, 'store']);

// about
Route::resource('/admin/about', DashboardAboutController::class)->middleware('auth');

// skills
Route::resource('/admin/skill', DashboardSkillController::class)->middleware('auth');

// portfolio
Route::resource('/admin/portfolio', DashboardPortfolioController::class)->middleware('auth');

// contact
Route::resource('/admin/contact', DashboardContactController::class)->middleware('auth');

// medsos
Route::resource('/admin/social', DashboardSocialController::class)->middleware('auth');