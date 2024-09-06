<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\LoginCOntroller;
use App\Http\Controllers\YourController;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PostBlogController;






// Route::post('/dashboard',[LoginCOntroller::class,'login']);

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[LoginCOntroller::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login',function(){
    return view('login');
})->name('login');


Route::post('/login',[LoginCOntroller::class,'loginaction']);


Route::get('/logout',[LoginCOntroller::class,'logout'])->name('logout');




Route::get('/home',function(){
    return view('dashboard');
});
Route::get('/content',function(){
    return view('content');
});

Route::get('/test',[LoginCOntroller::class,'test'])->name('test')->middleware('auth');

Route::get('/post-form',[LoginCOntroller::class,'blogPost'])->name('post')->middleware('auth');






// Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');

// Route::get('/category',[BlogPostController::class, 'ShowCategory']);



// Protect the route using the 'auth' middleware
// Route::middleware(['auth'])->group(function () {
//     Route::post('/post-blog/store', [PostBlogController::class, 'store'])->name('post_blog.store');
// });

Route::post('/post-blog/store', [PostBlogController::class, 'store'])->name('post_blog.store')->middleware('auth');

Route::post('/upload-image', [YourController::class, 'uploadImage'])->name('upload.image')->middleware('auth');



// Route to display posts
Route::get('/', [PostBlogController::class, 'index'])->name('post_blog.index')->middleware('auth');

// Route to edit posts

// Route to display the edit post form
Route::get('/post_blog/{id}/edit', [PostBlogController::class, 'edit'])->name('post_blog.edit')->middleware('auth');

// Route to handle the post update request
Route::put('/post_blog/{id}', [PostBlogController::class, 'update'])->name('post_blog.update')->middleware('auth');


// Route to delete posts
Route::delete('/post-blogs/{id}', [PostBlogController::class, 'destroy'])->name('post_blog.destroy')->middleware('auth');



// In web.php
Route::delete('/post-blog-image/{id}', [PostBlogController::class, 'deleteImage'])->name('post_blog_image.delete')->middleware('auth');


// Route::get('/create-category',function(){
// $category = new category();
// $category->category_name = "House Removels";
// $category->save();
// });


// Route::get('/create-user',function(){
//     $user = new User();
//     $user->password = 'Pawan123@#';
//     $user->email = 'pkumarrana';
//     $user->name = 'Pawan';
//     $user->save();

// });