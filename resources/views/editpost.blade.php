

@extends('layouts.master')
@section('title',"Index")

@section('metaimagedelete')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

<!-- Edit Post Form -->
<div id="edit-post" class="p-6 pt-0 bg-white shadow-md rounded-lg w-[900px] m-auto">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-3xl font-bold text-blue-800 ml-4">Edit Post</h3>
        <a href="{{ route('post_blog.index') }}" class="flex items-center text-blue-600 hover:text-blue-800 text-sm font-medium">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Show Posts
        </a>
    </div>

    <!-- Form for editing a post -->
    <form action="{{ route('post_blog.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-3">
        @csrf
        @method('PUT') <!-- For Laravel PUT request method spoofing -->

        <!-- Heading Input -->
        <div class="relative flex gap-2">
            <div class="flex-1">
                <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
                <input type="text" id="name" name="name" value="{{ old('name', $post->heading) }}" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            </div>

            <!-- Slug Input -->
            <div class="flex-1">
                <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            </div>
        </div>

        <!-- Meta Title Input -->
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
            <input type="text" id="meta-title" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>

        <!-- Meta Description Input -->
        <div class="relative">
            <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
            <input type="text" id="meta-description" name="meta_description" value="{{ old('meta_description', $post->meta_description) }}" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>

        <!-- Keyword Input -->
        <div class="relative">
            <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
            <input type="text" id="keyword" name="keyword" value="{{ old('keyword', $post->keyword) }}" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>

        <!-- Description Input -->
        <div class="relative">
            <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">{{ old('description', $post->description) }}</textarea>
        </div>

        <!-- Image Upload -->
<div class="relative">
    <label for="images" class="block text-gray-600 font-medium mb-1">Images</label>
    <input type="file" id="images" name="images[]" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" multiple>
    @if($post->images->count())
        <div class="mt-2 flex gap-2">
            @foreach($post->images as $image)
                <div class="relative group">
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Post Image" class="w-16 h-16 object-contain">
                    <button type="button" data-image-id="{{ $image->id }}" class="absolute top-[-10px] right-[-4px] mt-1 mr-1 p-1 bg-red-500 text-white rounded-full hover:bg-red-700">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            @endforeach
        </div>
    @endif
</div>

        <!-- Submit Button -->
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update Post</button>
    </form>
</div>
