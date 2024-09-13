@extends('admin/index')
@section('metacsrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('editfeaturedform')

    <div id="add-post" class="p-6 pb-1 pt-0 bg-white shadow-md rounded-lg">
        <h3 class="text-3xl font-bold text-blue-800 mb-3">
            Edit Featured Post
        </h3>

        <form action="{{ route('featured_blogs.update', $featuredBlog->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-1">
            @csrf
            @if (isset($featuredBlog))
                @method('PUT')
            @endif



            <!-- Heading and Slug Inputs -->
            <div class="relative flex gap-2">
                <div class="flex-1">
                    <label for="heading" class="block text-gray-600 font-medium mb-1">Heading</label>
                    <input type="text" id="heading" name="heading"
                        value="{{ old('heading', $featuredBlog->heading ?? '') }}"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                        required>
                </div>
                <div class="flex-1">
                    <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug', $featuredBlog->slug ?? '') }}"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                </div>
            </div>

            <!-- Meta Title and Category Inputs -->
            <div class="relative flex gap-2">
                <div class="flex-1">
                    <label for="meta_title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title"
                        value="{{ old('meta_title', $featuredBlog->meta_title ?? '') }}"
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
                                {{ old('category_id', $featuredBlog->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Meta Description and Keyword Inputs -->
            <div class="relative">
                <label for="meta_description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
                <input type="text" id="meta_description" name="meta_description"
                    value="{{ old('meta_description', $featuredBlog->meta_description ?? '') }}"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <div class="relative">
                <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
                <input type="text" id="keyword" name="keyword"
                    value="{{ old('keyword', $featuredBlog->keyword ?? '') }}"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <!-- Description Textarea -->
            <div class="relative">
                <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">{{ old('description', $featuredBlog->description ?? '') }}</textarea>
            </div>

            <!-- Images Input -->
            <div class="relative">
                <label for="images" class="block text-gray-600 font-medium mb-1">Images</label>
                <input type="file" id="images" name="images[]" multiple
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
{{-- 
                <!-- Display Existing Images -->
                <div class="mt-3">
                    <h4 class="text-gray-700 font-medium">Existing Images:</h4>
                    <div class="flex space-x-2">
                        @foreach ($images as $image)
                            <div class="relative w-20 h-20 bg-gray-100 border rounded">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image"
                                    class="object-cover w-full h-full relative">

                                <!-- Red X Button for Deleting Image -->
                                <form class="absolute top-0 right-0 delete-form" data-image-id="{{ $image->id }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="button"
                                        class="delete-image-button absolute w-5 h-5 top-[-8px] right-[-8px] bg-red-600 text-white text-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                                        x
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div> --}}


                    <!-- Display Current Images -->
                    @if ($featuredBlog->images->isNotEmpty())
                        <div class="mt-2 flex gap-3">
                            @foreach ($featuredBlog->images as $image)
                                <div id="image-{{ $image->id }}" class="relative w-16 h-20">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Current Image"
                                        class="w-full h-full inline-block border border-gray-300 rounded object-cover">
                                    <!-- Delete Button -->
                                    <button type="button"
                                        class="absolute w-6 h-6 top-[-12px] right-[-12px] bg-red-600 text-white text-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
                                        onclick="deleteImage2({{ $image->id }})">
                                        &times;
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif



                </div>
            </div>


            <!-- Submit Button -->
            <button type="submit"
                class="w-full px-4 mt-2 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Update
            </button>
        </form>
    </div>


@endsection
<script>
   function deleteImage2(imageId) {
    if (confirm('Are you sure you want to delete this image?')) {
        // Get CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Perform the DELETE request
        fetch(`/admin/featured_blogs/image/${imageId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken // CSRF token for security
            },
        })
        .then(response => {
            // Log the raw response to see what is being returned
            console.log(response);
            
            return response.json(); // Parse the JSON response
        })
        .then(data => {
            console.log(data); // Log the parsed JSON data
            
            if (data.success) {
                // Remove the image from the DOM
                document.getElementById(`image-${imageId}`).remove();
                alert(data.message);
            } else {
                alert('Error: Could not delete the image.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error: Could not delete the image.');
        });
    }
}


</script>