<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefortController;
use App\Http\Controllers\PostController;

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

// Blog Routes
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [PostController::class, 'publicIndex'])->name('index');
    Route::get('/{post:slug}', [PostController::class, 'show'])->name('show');
});

Route::prefix('blog/admin')->name('blog.admin.')->group(function () {
    Route::get('/posts', [PostController::class, 'adminIndex'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/upload-image', [PostController::class, 'uploadImage'])->name('upload.image');
});