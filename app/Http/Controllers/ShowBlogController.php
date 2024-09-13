<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\FeaturedBlog;
use App\Models\FeaturedBlogImage;
use App\Models\PostBlog;
use App\Models\ShowBolgToHome;
use Illuminate\Http\Request;

class ShowBlogController extends Controller
{
  
    public function index()
{
    $blogs = PostBlog::with(relations: ['images', 'category' , 'user'])->orderBy('id', 'desc')->take(6)->get();

    $featuredBlogs = FeaturedBlog::with(['images', 'category', 'user'])->orderBy('id' ,'desc')->take(5)->get();
    
    return view('index', compact('blogs', 'featuredBlogs' ));
}

    


    public function show($slug)
    {
        $blog = PostBlog::where('slug', $slug)->with('images')->firstOrFail();

        return view('finalpage', compact('blog'));
    }
   




    public function featuredfinalpage($slug){

    $featuredBlogs = FeaturedBlog::where('slug', $slug)->with(['images', 'category', 'user'])->firstOrFail();
    
    return view('featuredfinalpage', compact( 'featuredBlogs' ));
    }
}
