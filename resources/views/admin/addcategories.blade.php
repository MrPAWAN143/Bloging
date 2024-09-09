@extends('admin/index')


@section('addCategory')


                <!-- Category Section -->
                <div id="category-section" class="">
                    <!-- Add Category Form -->
                    <div id="add-category" class=" p-6 pt-0 bg-white shadow-md rounded-lg">
                        <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Add Category</h3>
                        <form action="{{ route('categories.store') }}" method="POST" class="space-y-3">
                            @csrf
                            <div class="relative flex gap-2">
                                <div class="flex-1">
                                    <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
                                    <input type="text" id="name" name="name"
                                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"
                                        required>
                                    <svg class="absolute top-2 right-3 h-5 w-5 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
                                    <input type="text" id="slug" name="slug"
                                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                                </div>
                            </div>

                            <div class="relative">
                                <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
                                <input type="text" id="meta-title" name="meta-title"
                                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                            </div>
                            <div class="relative">
                                <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta
                                    Description</label>
                                <input type="text" id="meta-description" name="meta-description"
                                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
                            </div>
                            <div class="relative">
                                <label for="keyword" class="block text-gray-600 font-medium mb-1">Keywords</label>
                                <input type="text" id="keyword" name="keywords"
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