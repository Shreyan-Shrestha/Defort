<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefortController;

Route::get("/", [DefortController::class,'index']);
