@extends('admin/index')


@section('addposts')
    <!-- Add Post Form -->
    <div id="add-post" class=" p-6 pt-0 bg-white shadow-md rounded-lg">
        <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Add Posts</h3>




        <form action="{{ route('addposts.create') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
            @csrf
            <div class="relative">
                <label for="images" class="block text-gray-600 font-medium mb-1">Images</label>
                <input type="file" id="images" name="images[]" multiple
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <div class="relative flex gap-2">
                <div class="flex-1">
                    <label for="heading" class="block text-gray-600 font-medium mb-1">Heading</label>
                    <input type="text" id="heading" name="heading"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                        required>
                </div>
                <div class="flex-1">
                    <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
                    <input type="text" id="slug" name="slug"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                </div>
            </div>

            <div class="relative flex gap-2">

                <div class="flex-1">
                    <label for="meta_title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                </div>


                <div class="flex-1">
                    <label for="category_id" class="block text-gray-600 font-medium mb-1">Category</label>
                    <select id="category_id" name="category_id"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <div class="relative">
                <label for="meta_description" class="block text-gray-600 font-medium mb-1">Meta
                    Description</label>
                <input type="text" id="meta_description" name="meta_description"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <div class="relative">
                <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
                <input type="text" id="keyword" name="keyword"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
            </div>

            <div class="relative">
                <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"></textarea>
            </div>


            <button type="submit"
                class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
        </form>

    </div>
@endsection
