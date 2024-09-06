<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    //
    public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $file = $request->file('upload');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        $url = asset('uploads/' . $fileName);

        return response()->json([
            'url' => $url
        ]);
    }
}

}
