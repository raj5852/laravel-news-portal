<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\VuejsController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\JavascriptController;
use App\Http\Controllers\NewpostController;
use App\Http\Controllers\PhpController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('laravel',[LaravelController::class,'index'])->name('laravel');
Route::get('vue-js',[VuejsController::class,'index'])->name('vuejs');
Route::get('php',[PhpController::class,'index'])->name('php');
Route::get('javascript',[JavascriptController::class,'index'])->name('javascript');




//admin route   

Route::get('adminlogin', [CustomAuthController::class, 'index'])->name('adminlogin');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('adminlogin.custom');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('new-post', [NewpostController::class, 'index'])->name('newpost');
Route::post('ckeditor/upload', [CKEditorController::class,'upload'])->name('ckeditor.image-upload');
Route::post('form-submit',[NewpostController::class,'formsubmit'])->name('formsubmit');
Route::get('all-post',[NewpostController::class,'allpost'])->name('allpost');
Route::get('oist-edit/{id}',[NewpostController::class,'postedit'])->name('postedit');
Route::post('editpostedit',[NewpostController::class,'editpostedit'])->name('editpostedit');
Route::post('delete-post',[NewpostController::class,'deletepost'])->name('deletepost');
