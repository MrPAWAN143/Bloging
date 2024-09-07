<?php
namespace App\Http\Controllers;

use App\Models\PostBlog;
use App\Models\PostBlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Storage;

class PostBlogController extends Controller
{
    public function store(Request $request)
    {
        // Custom validation rules and error messages
        $validatedData = $request->validate([
            'heading' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'description' => 'required|string',
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max file size per image
        ], [
            'heading.required' => 'The heading field is required.',
            'slug.required' => 'The slug field is required.',
            'description.required' => 'The description field is required.',
            'images.*.required' => 'You must upload at least one image.',
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Only jpg, jpeg, and png images are allowed.',
            'images.*.max' => 'Each image must not exceed 2MB in size.',
        ]);

        try {
            // Create the post blog
            $postBlog = PostBlog::create([
                'heading' => $validatedData['heading'],
                'slug' => $validatedData['slug'],
                'meta_title' => $validatedData['meta_title'],
                'meta_description' => $validatedData['meta_description'],
                'keyword' => $validatedData['keyword'],
                'description' => $validatedData['description'],
            ]);

            // Store the images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('post_images', 'public');
                    PostBlogImage::create([
                        'post_blog_id' => $postBlog->id,
                        'image_path' => $imagePath,
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Blog post successfully created!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error creating blog post: ' . $e->getMessage());

            return redirect('index')->withErrors('An error occurred while saving the blog post: ' . $e->getMessage());
        }
    }


      // Fetch all posts and send to the index page
      public function index()
      {
          // Fetch all posts with their related images
          $postBlogs = PostBlog::with('images')->select('id', 'heading', 'slug', 'meta_title', 'meta_description', 'keyword', 'description', 'created_at', 'updated_at')->orderBy('id', 'desc')->get();
  
          // Pass the data to the view
          return view('index', compact('postBlogs'));
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
    return redirect()->route('post_blog.index')->with('success', 'Post deleted successfully.');
}


public function edit($id)
{
    // Fetch the post by ID
    $post = PostBlog::findOrFail($id);
    
    // Return the edit view with the post data
    return view('editpost', compact('post'));
}

public function update(Request $request, $id)
{
    // Fetch the post by ID
    $post = PostBlog::findOrFail($id);

    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:255',
        'keyword' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'images' => 'nullable|array',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update post attributes
    $post->heading = $validatedData['name'];
    $post->slug = $validatedData['slug'];
    $post->meta_title = $validatedData['meta_title'];
    $post->meta_description = $validatedData['meta_description'];
    $post->keyword = $validatedData['keyword'];
    $post->description = $validatedData['description'];

    // Handle image upload if present
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('posts/images', 'public');
            $post->images()->create(['image_path' => $path]);
        }
    }

    // Save the updated post
    $post->save();

    // Redirect or respond as necessary
    return redirect()->route('post_blog.index')->with('success', 'Post updated successfully!');
}




public function deleteImage($id)
{
    $image = PostBlogImage::find($id);

    if ($image) {
        // Delete the image file from storage
        Storage::disk('public')->delete($image->image_path);

        // Delete the image record from the database
        $image->delete();

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}


}