<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefortController;

Route::get("/", [DefortController::class,'index']);
//Projects
Route::get("/projects", [DefortController::class,'projects']);
Route::get("/viewproject/{id}", [DefortController::class,'viewproject']);

//Contact
Route::get("/contact",[DefortController::class,'contact']);
Route::post("/addcontact",[DefortController::class,'addcontact']);

//About
Route::get("/about",[DefortController::class,'about']);


//Admin
Route::get("/admin",[AdminController::class,'index']);

Route::get("/adminprojects",[AdminController::class,'projects']);
Route::get('/projectadd', [AdminController::class,'addprojectform']);
Route::post('/addproject', [AdminController::class,'addproject']);
Route::get('/projectedit/{id}', [AdminController::class,'editproject']);
Route::put('/projectedit/{id}', [AdminController::class,'editprojectsubmit']);
Route::delete('/projectsdel/{id}',[AdminController::class,'delproject']);

Route::get('/admincontact', [AdminController::class,'contact']);
Route::delete('/delcontact/{id}',[AdminController::class,'destroycontact']);
Route::get("/adminabout",[AdminController::class,'about']);
Route::put("/addabout",[AdminController::class,'addabout']);