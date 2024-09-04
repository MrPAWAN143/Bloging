<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\LoginCOntroller;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;






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






Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');

Route::get('/category',[BlogPostController::class, 'ShowCategory']);




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