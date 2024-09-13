<?php
namespace App\Http\Controllers;

use App\Models\FeaturedBlog;
use App\Models\FeaturedBlogImage;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class FeaturedBlogController extends Controller
{
    
    public function create()
    {
        $categories = Category::all(); // Fetch all categories for the form
        return view('admin/addfeaturedblog', compact('categories'));
    }
    public function show()
    {
        $categories = Category::all(); // Fetch all categories
        $featuredBlogs = FeaturedBlog::with('category', 'user') ->orderBy('id', 'desc')->get(); // Fetch all featured blogs with related categories and users
    
        return view('admin/editfeaturedpost', compact('categories', 'featuredBlogs'));
    }
    

    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Automatically set user_id to the currently logged-in user's ID
        $data['user_id'] = Auth::id();

        try {
            $featuredBlog = FeaturedBlog::create($data);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('featured_blogsx', 'public');
                    FeaturedBlogImage::create([
                        'featured_blog_id' => $featuredBlog->id,
                        'image_path' => $imagePath,
                    ]);
                }
            }

            // Flash message for success
            $request->session()->flash('success', 'Featured Blog has been successfully added.');

            return redirect()->route('featured_blogs.index'); // Redirect to the index page
        } catch (\Exception $e) {
            // Flash message for error
            $request->session()->flash('error', 'An error occurred while adding the Featured Blog.');

            return redirect(url('/admin/editfeaturedpost'))->withInput(); // Redirect back with input
        }
    }







    public function edit($id)
    {
        $featuredBlog = FeaturedBlog::findOrFail($id);
        $categories = Category::all(); // Fetch all categories for the form
        $images = FeaturedBlogImage::where('featured_blog_id', $id)->get(); // Fetch associated images

        return view('admin/editfeaturedform', compact('featuredBlog', 'categories', 'images'));
    }



    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Automatically assign the authenticated user's ID
        $data['user_id'] = Auth::id();
    
        $featuredBlog = FeaturedBlog::findOrFail($id);
        $featuredBlog->update($data);
    
        // Check if new images were uploaded
        if ($request->hasFile('images')) {
            // Add new images (without deleting old images)
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('featured_blogs', 'public');
                FeaturedBlogImage::create([
                    'featured_blog_id' => $featuredBlog->id,
                    'image_path' => $imagePath,
                ]);
            }
        }
    
        return redirect(url('/admin/editfeaturedpost'))->with('success', 'Featured Blog updated successfully.');
    }
    


    public function destroy($id)
    {
        $featuredBlog = FeaturedBlog::findOrFail($id);
    
        // Delete associated images from the storage
        foreach ($featuredBlog->images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
        }
    
        // Delete the blog, which will also delete the records in featured_blog_images due to cascade delete
        $featuredBlog->delete();
    
        return redirect()->back()->with('success', 'Featured Blog and its images deleted successfully.');
    }



    public function deleteImage($id)
    {
        try {
            // Find the image by ID
            $image = FeaturedBlogImage::findOrFail($id);
    
            // Delete the image file from storage
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
    
            // Delete the image record from the database
            $image->delete();
    
            // Return JSON response
            return response()->json(['success' => true, 'message' => 'Image deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete the image.'], 500);
        }
    }
    
    
    
    

}
