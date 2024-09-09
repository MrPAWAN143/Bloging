<?php

namespace App\Http\Controllers;
use App\Models\PostBlog;
use App\Models\ShowBolgToHome;
use Illuminate\Http\Request;

class ShowBlogController extends Controller
{
  
    public function index()
    {
        // Fetch latest 6 blogs with their related images from the 'post_blogs' table
        $blogs = PostBlog::with('images')->latest()->take(6)->get();
    
        // Pass the blogs to the 'dashboard' view
        return view('dashboard', compact('blogs'));
    }


    public function show($slug)
    {
        // Fetch the blog using the slug
        $blog = PostBlog::where('slug', $slug)->with('images')->firstOrFail();

        // Pass the blog to the 'blog-details' view
        return view('finalpage', compact('blog'));
    }


}
