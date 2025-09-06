<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefortController;

Route::get("/", [DefortController::class,'index']);
//Projects
Route::get("/projects", [DefortController::class,'projects']);

//Contact
Route::get("/contact",[DefortController::class,'contact']);


//Admin
Route::get("/admin",[AdminController::class,'index']);
Route::get("/adminprojects",[AdminController::class,'projects']);
Route::post('/addproject', [AdminController::class,'addproject']);