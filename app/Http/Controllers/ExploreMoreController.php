<?php
namespace App\Http\Controllers;

use App\Models\ExploreMore;
use App\Models\ExploreMoreImage;
use Illuminate\Http\Request;

class ExploreMoreController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Multiple images validation
        ]);

        $exploreMore = ExploreMore::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('explore_more', 'public');
                ExploreMoreImage::create([
                    'explore_more_id' => $exploreMore->id,
                    'image' => $imagePath,
                ]);
            }
        }

        return redirect()->route('explore_more.index');
    }
}
