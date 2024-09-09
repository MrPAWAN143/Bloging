<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\CategoryController;


class CategoryController extends Controller
{
     // Store a new category
     public function store(Request $request)
     {
         // Validate the form data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'slug' => 'required|string|max:255|unique:categories,slug',
             'meta-title' => 'nullable|string|max:255',
             'meta-description' => 'nullable|string',
             'keywords' => 'nullable|string',
             'description' => 'nullable|string',
         ]);
 
         // Create a new category
         $category = new Category();
         $category->name = $validatedData['name'];
         $category->slug = $validatedData['slug'];
         $category->meta_title = $validatedData['meta-title'];
         $category->meta_description = $validatedData['meta-description'];
         $category->keywords = $validatedData['keywords'];
         $category->description = $validatedData['description'];
         $category->save();
 
         // Redirect back to the categories list with a success message
         return redirect(url('/admin/editcategories'))->with('success', 'Category added successfully.');
     }

    
    public function index()
{
    // Fetch all categories from the database in descending order by 'id' (or 'created_at')
    $categories = Category::orderBy('id', 'desc')->get();
    
    // Pass the categories to the view
    return view('admin/editcategories', compact('categories'));

}




    public function destroy($id)
    {
        // Find the category by its ID
        $category = Category::findOrFail($id);
    
        // Delete the category
        $category->delete();
    
        // Redirect to the specific URL with a success message
        return redirect(url('/admin/editcategories'))->with('success', 'Category deleted successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin/editcategoriesform', compact('category'));
    }




    
    public function update(Request $request, Category $category)
{
    // Validate request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string',
        'keywords' => 'nullable|string',
        'description' => 'nullable|string',
    ]);

    // Modify the slug to be lowercase, trim spaces, and replace spaces with hyphens
    $validatedData['slug'] = strtolower(trim(preg_replace('/\s+/', '-', $validatedData['slug'])));

    // Update the category with validated data
    $category->update($validatedData);

    return redirect()->route('admin.editcategories')->with('success', 'Category updated successfully.');
}

    
    
}

