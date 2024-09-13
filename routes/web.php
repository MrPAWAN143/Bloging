<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FeaturedBlogController;
use App\Http\Controllers\LoginCOntroller;
use App\Http\Controllers\ShowBlogController;
use App\Models\category;
use App\Models\User;
use GuzzleHttp\Middleware;
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

Route::get('/admin/editposts', [PostBlogController::class, 'index'])->name('editposts.index')->middleware('auth');
 Route::put('/admin/edited/{id}', [PostBlogController::class, 'edit'])->name('edited.edit')->middleware('auth');
 Route::put('/admin/post-blogs/{post_blog}', [PostBlogController::class, 'update'])->name('post_blog.update')->middleware('auth');




Route::get('/admin/post_blog/edit/{post_blog}', [PostBlogController::class, 'edit'])->name('post_blog.edit')->middleware('auth');
Route::delete('/admin/post_blog/{id}', [PostBlogController::class, 'destroy'])->name('post_blog.destroy')->middleware('auth');

Route::delete('/post_blog/{image}/delete_image', [PostBlogController::class, 'deleteImage'])->name('post_blog.delete_image')->middleware('auth');









Route::get('/final-page',function(){
return view('finalpage');
});


Route::post('/login',[LoginCOntroller::class,'loginaction']);


Route::get('/logout',[LoginCOntroller::class,'logout'])->name('logout');





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
//     $user->email = 'admin@gmail.com';
//     $user->name = 'Mulk Raj Anand';
//     $user->save();

// });







Route::get('/', [ShowBlogController::class, 'index'])->name('home');

Route::get('/blog/{slug}', [ShowBlogController::class, 'show'])->name('blog.show');


// Route::get('/', [ShowBlogController::class, 'featuredBlogs'])->name('featured.show');
// web.php
// Route::get('/featuredBlog/{id}', [FeaturedBlogController::class, 'show'])->name('featuredBlog.show');
Route::get('/featuredBlog/{slug}', [ShowBlogController::class, 'featuredfinalpage'])->name('firstFeatured.slug');
Route::get('/featured/{slug}', [ShowBlogController::class, 'featuredfinalpage'])->name('featured.slug');






// Featured blog??????????????

Route::get('/admin/addfeaturedpost',[FeaturedBlogController::class,'create'])->name('featured_blogs.create')->middleware('auth');
Route::get('/admin/editfeaturedpost',[FeaturedBlogController::class,'show'])->name('editfeaturedpost')->middleware('auth');

// Route::get('/admin/featured_blogs/create', [FeaturedBlogController::class, 'create'])->name('featured_blogs.create')->middleware('auth');

// Route to display the form to edit a featured blog
Route::get('/admin/featured_blogs/edit/{id}', [FeaturedBlogController::class, 'edit'])->name('featured_blogs.edit')->middleware('auth');
// Route to handle the update of a featured blog
Route::put('/admin/featured_blogs/{id}', [FeaturedBlogController::class, 'update'])->name('featured_blogs.update')->middleware('auth');
// In routes/web.php
// Route to delete a featured blog
Route::delete('/admin/featured_blogs/{id}', [FeaturedBlogController::class, 'destroy'])->name('featured_blogs.destroy')->middleware('auth');

Route::delete('/admin/featured_blogs/image/{id}', [FeaturedBlogController::class, 'deleteImage'])->name('featured_blogs.imagedelete')->middleware('auth');


Route::post('/admin/featured_blogs', [FeaturedBlogController::class, 'store'])->name('featured_blogs.store')->middleware('auth');







