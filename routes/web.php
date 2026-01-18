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
Route::prefix('pneaiaslls838393')->middleware('admin.basic')->group(function () {  // or whatever your middleware is

    // Dashboard / main admin page
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Projects section
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');

    Route::get('/project/add', [AdminController::class, 'addprojectform'])->name('project.add');
    Route::post('/project/add', [AdminController::class, 'addproject'])->name('project.store');

    Route::get('/project/edit/{id}', [AdminController::class, 'editproject'])->name('project.edit');
    Route::put('/project/edit/{id}', [AdminController::class, 'editprojectsubmit'])->name('project.update');

    Route::delete('/project/delete/{id}', [AdminController::class, 'delproject'])->name('project.destroy');

    // Contacts
    Route::get('/contacts', [AdminController::class, 'contact'])->name('admin.contacts');

    Route::delete('/contact/delete/{id}', [AdminController::class, 'destroycontact'])->name('contact.destroy');
});

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