@extends('admin/index')

@section('editposts')


<div class="flex items-center justify-between mb-4 pe-10">
    <h3 class="text-xl font-semibold mb-4">Show Posts</h3>
    <a href="{{ url('/admin/addposts') }}" class="flex items-center text-blue-600 hover:text-blue-800 text-sm font-medium">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Add Post
    </a>
</div>
<!-- Table for showing posts -->
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2">Count</th>
            <th class="py-2">Heading</th>
            <th class="py-2">Slug (URL)</th>
            {{-- <th class="py-2">Category Id</th> --}}
            {{-- <th class="py-2">Meta Description</th> --}}
            <th class="py-2">Keyword</th>
            <th class="py-2">Description</th>
            {{-- <th class="py-2">Created At</th> --}}
            {{-- <th class="py-2">Updated At</th> --}}
            {{-- <th class="py-2">Images</th> --}}
            <th class="py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1; ?>

        @foreach ($postBlogs as $post)
            <tr class="border-b">
                <td class="py-2 px-4">{{ $count }}</td>
                <td class="py-2 px-4">{{ $post->heading }}</td>
                <td class="py-2 px-4">{{ Str::limit($post->slug, 20) }}</td>
                {{-- <td class="py-2 px-4">{{ $post->name }}</td> --}}
                {{-- <td class="py-2 px-4">{{ Str::limit($post->meta_description , 10) }}</td> --}}
                <td class="py-2 px-4">{{ Str::limit($post->keyword, 20) }}</td>
                <td class="py-2 px-4">{{ Str::limit($post->description, 30) }}</td>
                {{-- <td class="py-2 px-4">{{ $post->created_at }}</td> --}}
                {{-- <td class="py-2 px-4">{{ $post->updated_at }}</td> --}}
                {{-- <td class="py-2 px-4">
                                        @if ($post->images->count())
                                            @foreach ($post->images as $image)
                                                <img src="{{ asset('storage/app/public/' . $image->image_path) }}" alt="Post Image" class="w-16 h-16 object-cover">
                                               
                                            @endforeach

                                         
                                        @else
                                            <span>No Images</span>
                                        @endif
                                    </td> --}}
                <td class="py-2 px-4 text-center flex gap-2">
                    <!-- Edit Button -->
                    <a href="{{ route('post_blog.edit', $post->id) }}"  class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs"
                        data-target="edit-post">Edit</a>
                    {{-- <a href="{{ route('post_blog.edit', $post->id) }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white " data-target="edit-post">Edit</a> --}}
                    <!-- Delete Button -->
                    <form action="{{ route('post_blog.destroy', $post->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this post?');"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $count++; ?>
        @endforeach
    </tbody>
</table>
</div>

@endsection