@extends('admin.index')


@section('editfeaturedpost')
<div class="p-0 bg-white rounded-lg">
    <h3 class="text-3xl font-bold text-blue-800 mb-3">Featured Blogs</h3>
    
    <a href="{{ route('featured_blogs.create') }}"
        class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-lg">Add New Blog</a>

    <table class="w-full border border-gray-300">
        <thead>
            <tr>
                <th class="border-b px-0 py-0">Count</th>
                {{-- <th class="border-b px-4 py-2">Category</th> --}}
                {{-- <th class="border-b px-4 py-2">User</th> --}}
                <th class="border-b px-4 py-2">Heading</th>
                <th class="border-b px-4 py-2">Slug</th>
                <th class="border-b px-4 py-2">Meta Title</th>
                <th class="border-b px-4 py-2">Meta Description</th>
                <th class="border-b px-4 py-2">Keyword</th>
                <th class="border-b px-4 py-2">Description</th>
                <th class="border-b px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1 ?>
            @foreach ($featuredBlogs as $blog)
            <tr>
                <td class="border-b px-4 py-2">{{ $count }}</td>
                {{-- <td class="border-b px-4 py-2">{{ $blog->category->name }}</td> --}}
                {{-- <td class="border-b px-4 py-2">{{ $blog->user->name }}</td> --}}
                <td class="border-b px-4 py-2">{{ Str::limit($blog->heading,20) }}</td>
                <td class="border-b px-4 py-2">{{ Str::limit($blog->slug,20) }}</td>
                <td class="border-b px-4 py-2">{{ Str::limit($blog->meta_title,20) }}</td>
                <td class="border-b px-4 py-2">{{Str::limit( $blog->meta_description,20) }}</td>
                <td class="border-b px-4 py-2">{{ Str::limit($blog->keyword,20) }}</td>
                <td class="border-b px-4 py-2 truncate">{{ Str::limit($blog->description,20) }}</td>
                <td class="border-b px-4 py-2 flex">
                    <a href="{{ route('featured_blogs.edit', $blog->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</a>
                    <form action="{{ route('featured_blogs.destroy', $blog->id) }}" method="POST" class="inline ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $count++ ?>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
