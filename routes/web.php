<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/header',function(){
//     return view('header');
// });

// Route::get('/', [HomeController::class,'index']);
// Route::get('/about',[HomeController::class, 'header']);

// Route::ger('/contact-us',function(){
//     echo "<h1>Contact us Page </h>";
// })


//---For CURD Operation---

Route::get('/',[ContactsController::class,'index'])->name('contact.index');
Route::post('/contact/add',[ContactsController::class,'store'])->name('contact.store');
Route::get('/contact/edit/{id}',[ContactsController::class,'edit'])->name('contact.edit');
Route::get('/contact/delete/{id}',[ContactsController::class,'delete'])->name('contact.delete');
Route::post('/contact/update/{id}',[ContactsController::class,'update'])->name('contact.update');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::get('/login/show',[LoginController::class,'show'])->name('login.show');
Route::post('/login/post',[LoginController::class,'login'])->name('login.post');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
