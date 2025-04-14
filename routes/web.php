<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',[UserController::class,'index']);
Route::get('/favbefore',[UserController::class,'favbefore']);
Route::get('/findmeal',[UserController::class,'findmeal']);
Route::get('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login']);
Route::get('/menu',[UserController::class,'menu']);
Route::get('/profile',[UserController::class,'profile']);
Route::get('/edit-profile',[UserController::class,'profileEdit']);
Route::get('/uploadprofile',[UserController::class,'profileUpload']);
Route::get('/favorite',[UserController::class,'favafter']);
Route::get('/showmeal',[UserController::class,'showmymeal']);
Route::get('/showmealdetails/{meal:id}',[UserController::class,'checkdetailmeal']);
Route::post('/login/post',[UserController::class,'loginaction']);
Route::get('/logout',[UserController::class,'logout']);
Route::post('/register/post',[UserController::class,'registeraction']);
Route::post('/findmeal/post',[UserController::class,'findmealaction']);
Route::get('/add-favorite/{meal:id}',[UserController::class,'addfavorite']);
Route::get('/delete-favorite/{favorite:id}',[UserController::class,'deletefavorite']);