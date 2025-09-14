<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefortController;

Route::get("/", [DefortController::class,'index']);
//Projects
Route::get("/projects", [DefortController::class,'projects']);

//Contact
Route::get("/contact",[DefortController::class,'contact']);
Route::post("/addcontact",[DefortController::class,'addcontact']);

//About
Route::get("/about",[DefortController::class,'about']);


//Admin
Route::get("/admin",[AdminController::class,'index']);
Route::get("/adminprojects",[AdminController::class,'projects']);
Route::post('/addproject', [AdminController::class,'addproject']);
Route::get('/admincontact', [AdminController::class,'contact']);
Route::delete('/delcontact/{id}',[AdminController::class,'destroycontact']);
Route::get("/adminabout",[AdminController::class,'about']);
Route::put("/addabout",[AdminController::class,'addabout']);