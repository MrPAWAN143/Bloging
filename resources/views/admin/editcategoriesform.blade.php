@extends('admin/index')

@section('editcategoriesform')
<form action="{{ route('categories.update', $category->id) }}" method="POST" class="space-y-3">
    @csrf
    @method('PUT') <!-- Use PUT or PATCH for updating -->

    <div class="relative flex gap-2">
        <div class="flex-1">
            <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
            <input type="text" id="name" name="name"
                value="{{ old('name', $category->name) }}" 
                class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex-1">
            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
            <input type="text" id="slug" name="slug"
                value="{{ old('slug', $category->slug) }}" 
                class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            @error('slug')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="relative">
        <label for="meta_title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
        <input type="text" id="meta_title" name="meta_title"
            value="{{ old('meta_title', $category->meta_title) }}" 
            class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        @error('meta_title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">
        <label for="meta_description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
        <input type="text" id="meta_description" name="meta_description"
            value="{{ old('meta_description', $category->meta_description) }}" 
            class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        @error('meta_description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">
        <label for="keywords" class="block text-gray-600 font-medium mb-1">Keywords</label>
        <input type="text" id="keywords" name="keywords"
            value="{{ old('keywords', $category->keywords) }}" 
            class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        @error('keywords')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">
        <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
        <textarea id="description" name="description" rows="4"
            class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">{{ old('description', $category->description) }}</textarea>
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit"
        class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Update Category
    </button>
</form>

</div>


@endsection