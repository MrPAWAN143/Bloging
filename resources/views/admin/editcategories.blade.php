@extends('admin/index')

@section('editcategories')
    <!-- Show Category Content -->
    <div id="show-category" class="block w-auto">
        <div class="flex items-center justify-between mb-4 pe-10">
            <h3 class="text-3xl font-bold text-blue-800 ml-4">Show Categories</h3>
            <a href="{{ url('/admin/addcategories') }}" class="flex items-center text-blue-600 hover:text-blue-800 text-sm font-medium">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Add Categories
            </a>
        </div>

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Categories</h1>
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="border-b py-2 px-4">Count</th>
                        <th class="border-b py-2 px-4">Name</th>
                        <th class="border-b py-2 px-4">Meta Description</th>
                        <th class="border-b py-2 px-4">Keyword</th>
                        <th class="border-b py-2 px-4">Description</th>
                        <th class="border-b py-2 px-4">Actions</th> <!-- Added Actions column -->
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border-b py-2 px-4">{{ $count }}</td>
                            <td class="border-b py-2 px-4">{{ $category->name }}</td>
                            <td class="border-b py-2 px-4">{{ $category->meta_description }}</td>
                            <td class="border-b py-2 px-4">{{ $category->keywords }}</td>
                            <td class="border-b py-2 px-4">{{ $category->description }}</td>
                            <td class="border-b py-2 px-4 flex space-x-2">
                                <!-- Edit Button -->
                                <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">
                                    Edit
                                </a>


                                <!-- Delete Button -->
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
