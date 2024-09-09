@extends('admin/index')
@section('metacsrf')
<!-- Assuming you have meta tag for CSRF Token in the head of your HTML -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('editpostsform')
    <div id="" class="p-6 pt-0 bg-white shadow-md rounded-lg">
        <h3 class="text-3xl font-bold text-blue-800 mb-3">Edit Post</h3>

        <form action="{{ route('post_blog.update', $post_blog->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-3">
            @csrf
            @method('PUT') <!-- Method directive for PUT request -->

            <!-- Heading and Slug -->
            <div class="relative flex gap-2">
                <div class="flex-1">
                    <label for="heading" class="block text-gray-600 font-medium mb-1">Heading</label>
                    <input type="text" id="heading" name="heading" value="{{ old('heading', $post_blog->heading) }}"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                        required>
                </div>
                <div class="flex-1">
                    <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug', $post_blog->slug) }}"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                </div>
            </div>

            <!-- Meta Title and Category -->
            <div class="relative flex gap-2">
                <div class="flex-1">
                    <label for="meta_title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title"
                        value="{{ old('meta_title', $post_blog->meta_title) }}"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                </div>

                <div class="flex-1">
                    <label for="category_id" class="block text-gray-600 font-medium mb-1">Category</label>
                    <select id="category_id" name="category_id"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                        required>
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id', $post_blog->category_id) ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Meta Description and Keyword -->
            <div class="relative">
                <label for="meta_description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
                <input type="text" id="meta_description" name="meta_description"
                    value="{{ old('meta_description', $post_blog->meta_description) }}"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <div class="relative">
                <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
                <input type="text" id="keyword" name="keyword" value="{{ old('keyword', $post_blog->keyword) }}"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <!-- Description -->
            <div class="relative">
                <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">{{ old('description', $post_blog->description) }}</textarea>
            </div>

            <!-- Images -->
            <div class="relative">
                <label for="images" class="block text-gray-600 font-medium mb-1">Images</label>
                <input type="file" id="images" name="images[]" multiple
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">

                <!-- Display Current Images -->
                @if ($post_blog->images->isNotEmpty())
                    <div class="mt-2 flex gap-2">
                        @foreach ($post_blog->images as $image)
                        <div id="image-{{ $image->id }}" class="relative">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Current Image"
                                 class="w-16 h-16 inline-block border border-gray-300 rounded object-cover">
                            <!-- Delete Button -->
                            <button type="button" class="absolute w-6 h-6 top-[-12px] right-[-12px] bg-red-600 text-white text-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
                                    onclick="deleteImage({{ $image->id }})">
                                &times;
                            </button>
                        </div>
                        
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Update
            </button>
        </form>
    </div>



@endsection
