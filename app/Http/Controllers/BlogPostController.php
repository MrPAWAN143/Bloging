<?php
namespace App\Http\Controllers;

use App\Models\category;
use DB;
use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'heading' => 'required|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        // Handle multiple file uploads
        if ($request->has('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = $imageName;
            }
            $validatedData['images'] = json_encode($imagePaths);
        }

        // Create a new BlogPost entry
        BlogPost::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Blog post created successfully!');
    }


    public function ShowCategory(){
       $category = DB::table('categories')->get();
        
       $data = compact('category');

    //    print_r($data);
       return view('blogpostform',["data"=>$data]);
   
    }
}
