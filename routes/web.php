<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\LoginCOntroller;
use App\Http\Controllers\ShowBlogController;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PostBlogController;

use App\Http\Controllers\CategoryController;






// Route::post('/dashboard',[LoginCOntroller::class,'login']);

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/admin',[LoginCOntroller::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login',function(){
    return view('login');
})->name('login');


Route::get('/admin/registeruser',[LoginCOntroller::class,'registeruser'])->name('registeruser')->middleware('auth');
Route::get('/admin/addcategories',[LoginCOntroller::class,'addcategories'])->name('addcategories')->middleware('auth');

Route::get('/admin/editcategories', [CategoryController::class, 'index'])->name('admin.editcategories')->middleware('auth');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('auth');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');

Route::get('/admin/addposts', [PostBlogController::class, 'create'])->name('addposts.create')->middleware('auth');
Route::post('/admin/addposts', [PostBlogController::class, 'store'])->name('addposts.store')->middleware('auth');

Route::get('/admin/editposts', [PostBlogController::class, 'index'])->name('editposts.index');
 Route::put('/admin/edited/{id}', [PostBlogController::class, 'edit'])->name('edited.edit')->middleware('auth');
//  Route::put('/admin/edited/{id}', [PostBlogController::class, 'update'])->name('edited.edit');
 Route::put('/admin/post-blogs/{post_blog}', [PostBlogController::class, 'update'])->name('post_blog.update')->middleware('auth');
//  Route::post('/admin/post-blogs/{post_blog}', [PostBlogController::class, 'update'])->name('post_blog.update')->middleware('auth');





// Route::get('/admin/addposts', [PostBlogController::class, 'create'])->name('post_blog.create')->middleware('auth');

// Route::post('/admin/addposts', [PostBlogController::class, 'store'])->name('addposts.store')->middleware('auth');





Route::get('/admin/post_blog/edit/{post_blog}', [PostBlogController::class, 'edit'])->name('post_blog.edit')->middleware('auth');
Route::delete('/admin/post_blog/{id}', [PostBlogController::class, 'destroy'])->name('post_blog.destroy')->middleware('auth');

Route::delete('/post_blog/{image}/delete_image', [PostBlogController::class, 'deleteImage'])->name('post_blog.delete_image')->middleware('auth');



// Route::delete('/admin/post-blogs/{image}/delete_image', [PostBlogController::class, 'deleteImage'])->name('post_blog.delete_image');




// Define the route for deleting a post blog
// Route::delete('/admin/post_blog/{post_blog}', [PostBlogController::class, 'destroy'])->name('post_blog.destroy');

// Route::post('/admin/post-blog', [PostBlogController::class, 'store'])->name('post_blog.store')->middleware('auth');

// Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');


// Route::get('/admin/editposts', [PostBlogController::class, 'index'])->name('categories.index')->middleware('auth');








Route::get('/final-page',function(){
return view('finalpage');
});


Route::post('/login',[LoginCOntroller::class,'loginaction']);


Route::get('/logout',[LoginCOntroller::class,'logout'])->name('logout');




// Route::get('/',function(){
//     return view('dashboard');
// });


// Route::get('/test',[LoginCOntroller::class,'test'])->name('test')->middleware('auth');

// Route::get('/post-form',[LoginCOntroller::class,'blogPost'])->name('post')->middleware('auth');






// // Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');

// // Route::get('/category',[BlogPostController::class, 'ShowCategory']);



// // Protect the route using the 'auth' middleware
// // Route::middleware(['auth'])->group(function () {
// //     Route::post('/post-blog/store', [PostBlogController::class, 'store'])->name('post_blog.store');
// // });



// Route::post('/upload-image', [YourController::class, 'uploadImage'])->name('upload.image')->middleware('auth');



// // Route to display posts
// // Route::get('/', [PostBlogController::class, 'index'])->name('post_blog.index')->middleware('auth');


// // Route to edit posts



// // Route to delete posts
// Route::delete('/post-blogs/{id}', [PostBlogController::class, 'destroy'])->name('post_blog.destroy')->middleware('auth');



// // In web.php
// Route::delete('/post-blog-image/{id}', [PostBlogController::class, 'deleteImage'])->name('post_blog_image.delete')->middleware('auth');





// // Route::post('/submit-comment', [CommentController::class, 'store'])->name('submit.comment');



// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');




// Route::get('/admin',function(){
//     return view('admin/dashboard');
// });
// Route::get('/admin',function(){
//     return view('admin/dashboaed');
// });

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







Route::get('/', [ShowBlogController::class, 'index'])->name('home');

Route::get('/blog/{slug}', [ShowBlogController::class, 'show'])->name('blog.show');
