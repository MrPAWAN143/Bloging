<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostBlog;
use App\Models\PostBlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Storage;

class PostBlogController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'keyword' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id', // Assuming 'categories' is your table
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Max file size 2MB
        ]);
    
        // Format the slug
        $slug = $request->input('slug');
        if ($slug) {
            // Convert to lowercase, trim spaces, and replace spaces with hyphens
            $slug = strtolower(trim(preg_replace('/\s+/', '-', $slug), '-'));
        }
    
        // Create a new PostBlog
        $post = new PostBlog();
        $post->heading = $request->heading;
        $post->slug = $slug; // Use the formatted slug
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->keyword = $request->keyword;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
    
        // Handle image uploads if any
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store each image in the 'public/uploads' directory
                $imagePath = $image->store('uploads', 'public');
    
                // Save the image record in the post_blog_images table
                PostBlogImage::create([
                    'post_blog_id' => $post->id,
                    'image_path' => $imagePath,
                ]);
            }
        }
    
        // Redirect with a success message
        return redirect(url('/admin/editposts'))->with('success', 'Post created successfully.');
    }
    




    // Fetch all posts and send to the index page
    public function index()
    {
        // Fetch all posts with their related images
        $postBlogs = PostBlog::with('images', 'category')->select('id', 'heading', 'slug', 'meta_title', 'meta_description', 'keyword', 'description', 'created_at', 'updated_at')->orderBy('id', 'desc')->get();

        // Pass the data to the view
        return view('admin/editposts', compact('postBlogs'));
    }



    public function destroy($id)
    {
        $postBlog = PostBlog::findOrFail($id);

        // Delete related images (if applicable)
        foreach ($postBlog->images as $image) {
            Storage::delete('public/' . $image->image_path); // Remove image from storage
            $image->delete(); // Delete image record from the database
        }

        // Delete the post
        $postBlog->delete();

        // Redirect back to the index page with a success message
        return redirect(url('/admin/editposts'))->with('success', 'Post deleted successfully.');
    }

    public function edit($id)
    {
        $post_blog = PostBlog::with('images')->findOrFail($id);
        $categories = Category::all(); // Adjust according to your categories fetching logic
        return view('admin/editpostsform', compact('post_blog', 'categories'));
    }




    public function update(Request $request, PostBlog $post_blog)
    {
        // Get and format the slug
        $rawSlug = $request->input('slug');
        $slug = $rawSlug ? strtolower(trim(preg_replace('/\s+/', '-', $rawSlug), '-')) : null;
    
        // Debugging: Log the formatted slug to check its value
        \Log::info('Formatted Slug: ' . $slug);
    
        // Validate the incoming request data, including the modified slug
        $validatedData = $request->validate([
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'keyword' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
    
        // Manually set the slug into validatedData after formatting it
        if ($slug) {
            $validatedData['slug'] = $slug;
        }
    
        // Check for changes in the data
        $changes = false;
    
        // Manually compare and update the fields (because isDirty() only works after assigning values)
        if ($post_blog->category_id != $validatedData['category_id']) {
            $post_blog->category_id = $validatedData['category_id'];
            $changes = true;
        }
    
        if ($post_blog->heading != $validatedData['heading']) {
            $post_blog->heading = $validatedData['heading'];
            $changes = true;
        }
    
        if (isset($validatedData['slug']) && $post_blog->slug != $validatedData['slug']) {
            $post_blog->slug = $validatedData['slug'];
            $changes = true;
        }
    
        if ($post_blog->meta_title != $validatedData['meta_title']) {
            $post_blog->meta_title = $validatedData['meta_title'];
            $changes = true;
        }
    
        if ($post_blog->meta_description != $validatedData['meta_description']) {
            $post_blog->meta_description = $validatedData['meta_description'];
            $changes = true;
        }
    
        if ($post_blog->keyword != $validatedData['keyword']) {
            $post_blog->keyword = $validatedData['keyword'];
            $changes = true;
        }
    
        if ($post_blog->description != $validatedData['description']) {
            $post_blog->description = $validatedData['description'];
            $changes = true;
        }
    
        // Save changes if any field has been updated
        if ($changes) {
            $post_blog->save();  // Save the updated data
        }
    
        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('uploads', 'public');
                $post_blog->images()->create(['image_path' => $imagePath]);
            }
            $changes = true; // Mark that changes were made
        }
    
        // Provide feedback based on what was updated
        if ($changes) {
            return redirect()->route('editposts.index', $post_blog->id)
                ->with('success', 'Post updated successfully.');
        } else {
            return redirect()->route('editposts.index', $post_blog->id)
                ->with('info', 'No changes made to the post.');
        }
    }
    



    public function deleteImage($imageId)
    {
        $image = PostBlogImage::findOrFail($imageId);
        if ($image->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
    





    public function create()
    {
        // Fetch all categories from the categories table
        $categories = Category::all();

        // Pass the categories to the view
        return view('admin/addposts', compact('categories'));
    }






}