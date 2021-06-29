<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;




/******************steps to create project******************************

 1- define routes in web.php
 2- create new controller
 3- create methode to each route يفضل يكون اسم الدالة نفس اسم الصفحة
 4- create view to each rout

************************************************************************* */


Route::get('/home',[pagesController::class,'home'])->name('home');
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
Route::get('/about',[pagesController::class,'about'])->name('about');
Route::get('/services',[pagesController::class,'services'])->name('services');
Route::get('/team',[pagesController::class,'team'])->name('team');
