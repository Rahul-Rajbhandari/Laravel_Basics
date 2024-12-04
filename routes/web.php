<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
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