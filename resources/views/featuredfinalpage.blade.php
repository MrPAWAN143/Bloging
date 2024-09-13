@extends('layouts.master')

@section('meta')
    <meta name="title" content="{{ $featuredBlogs->meta_title }}">
    <meta name="discription" content="{{ $featuredBlogs->meta_description }}">
@endsection

@section('title')
    <title>{{ $featuredBlogs->keyword }}</title>
@endsection
@section('navbar')
    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-10">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="assest/images/logo.webp" class="h-8" alt="Flowbite Logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">

                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul
                    class="flex flex-col mt-4  md:items-center font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <a href="#"
                            class="block py-2 px-2 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-02 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>

                        <a href="#"
                            class="block py-2 px-2  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">House Removals</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Office
                            Removals</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Furniture
                            Removals</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Commercial
                            Removals</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Packing
                            Service</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
@endsection


@section('IndexPage')
<section class=" py-4 md:w-[70%] m-auto">
    <div class="container mx-auto px-4 ">
        <div class="bg-gray-200 flex flex-col rounded-lg mb-8 overflow-hidden">
            <!-- Slick Slider for images -->
            <div class="featuredslider">
                @forelse ($featuredBlogs->images as $image)
                    <div>
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Featured Blog Image"
                            class="w-full h-[400px] md:h-[400px] lg:h-[400px] object-cover">
                    </div>
                @empty
                    <div class="flex items-center justify-center h-[400px] md:h-[400px] lg:h-[400px] bg-gray-200">
                        <p class="text-gray-600 text-xl text-center  leading-[400px]">No images available</p>
                    </div>
                @endforelse
            </div>

            <div class="p-4 pt-0">
                <p class="text-gray-600 mb-2 text-sm md:text-base">
                    By <span class="font-semibold">{{ $featuredBlogs->user->name ?? 'Unknown Author' }}</span> |
                    <span class="font-semibold">{{ $featuredBlogs->created_at->format('F d, Y') }}</span> |
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                        {{ $featuredBlogs->category->name ?? 'Uncategorized' }}
                    </a>
                </p>
                <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $featuredBlogs->heading }}</h1>

                <div class="relative">
                    <p id="description" class="text-gray-700 text-base md:text-lg leading-6">
                        {{ Str::limit($featuredBlogs->description, 300) }}
                    </p>
                    <p id="full-description" class="hidden text-gray-700 text-base md:text-lg leading-6 mt-4">
                        {{ $featuredBlogs->description }}
                    </p>
                    <button id="see-more" class="text-blue-500 hover:underline mt-2">Show More</button>


        
                </div>



                <!-- Social Media Share Buttons -->
                <div class="flex gap-4 mb-8 mt-6 flex-wrap">
                         <!-- Social Media Share Buttons -->
                    <div class="flex gap-4 ">
                        <!-- Facebook Icon -->
                        <a href="#" class="text-blue-500 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h11.495v-9.294H9.847v-3.62h2.973V8.413c0-2.939 1.796-4.543 4.418-4.543 1.256 0 2.335.093 2.649.135v3.07h-1.817c-1.425 0-1.7.678-1.7 1.672v2.191h3.4l-.443 3.62h-2.957V24h5.789C23.407 24 24 23.407 24 22.676V1.325C24 .593 23.407 0 22.675 0z" />
                            </svg>
                            Facebook
                        </a>

                        <!-- Instagram Icon -->
                        <a href="#" class="text-pink-500 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 1.206.056 1.86.247 2.29.415.59.228 1.01.5 1.452.942.442.442.715.862.942 1.451.168.431.36 1.085.416 2.29.058 1.268.07 1.648.07 4.851s-.012 3.584-.07 4.85c-.056 1.206-.247 1.86-.415 2.29-.228.59-.5 1.01-.942 1.452-.442.442-.862.715-1.451.942-.431.168-1.085.36-2.29.416-1.268.058-1.648.07-4.851.07s-3.584-.012-4.85-.07c-1.206-.056-1.86-.247-2.29-.415a3.516 3.516 0 0 1-1.451-.942 3.516 3.516 0 0 1-.942-1.451c-.168-.431-.36-1.085-.416-2.29-.058-1.268-.07-1.648-.07-4.85s.012-3.584.07-4.851c.056-1.206.247-1.86.415-2.29.228-.59.5-1.01.942-1.452.442-.442.862-.715 1.451-.942.431-.168 1.085-.36 2.29-.416 1.268-.058 1.648-.07 4.85-.07M12 0C8.741 0 8.332.012 7.052.07c-1.278.059-2.155.256-2.906.545a5.92 5.92 0 0 0-2.148 1.41A5.92 5.92 0 0 0 .544 4.163c-.289.751-.486 1.628-.544 2.906C0 8.332 0 8.741 0 12s.012 3.668.07 4.948c.059 1.278.256 2.155.544 2.906.293.751.671 1.39 1.41 2.148a5.92 5.92 0 0 0 2.148 1.41c.751.289 1.628.486 2.906.544C8.332 24 8.741 24 12 24s3.668-.012 4.948-.07c1.278-.059 2.155-.256 2.906-.544a5.92 5.92 0 0 0 2.148-1.41 5.92 5.92 0 0 0 1.41-2.148c.289-.751.486-1.628.544-2.906.058-1.28.07-1.689.07-4.948s-.012-3.668-.07-4.948c-.059-1.278-.256-2.155-.544-2.906a5.92 5.92 0 0 0-1.41-2.148A5.92 5.92 0 0 0 20.907.615c-.751-.289-1.628-.486-2.906-.544C15.668 0 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324A6.162 6.162 0 0 0 12 5.838zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" />
                            </svg>
                            Instagram
                        </a>

                        <!-- Twitter Icon -->
                        <a href="#" class="text-blue-400 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.864 9.864 0 0 1-3.127 1.195 4.916 4.916 0 0 0-8.379 4.482A13.95 13.95 0 0 1 1.671 3.149a4.916 4.916 0 0 0 1.523 6.557 4.902 4.902 0 0 1-2.228-.616v.061a4.918 4.918 0 0 0 3.946 4.827 4.902 4.902 0 0 1-2.224.084 4.922 4.922 0 0 0 4.593 3.417A9.867 9.867 0 0 1 .964 19.539a13.941 13.941 0 0 0 7.548 2.212c9.057 0 14.01-7.512 14.01-14.01 0-.213-.005-.425-.015-.636A10.025 10.025 0 0 0 24 4.557z" />
                            </svg>
                            Twitter
                        </a>
                    </div>

                </div>

                <!-- Comment Form -->
                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Leave a Comment</h2>
                    <form action="" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="featured_blog_id" value="{{ $featuredBlogs->id }}">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Name:</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email:</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="comment" class="block text-gray-700">Comment:</label>
                            <textarea id="comment" name="comment" rows="4"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2" required></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Slick Slider JS -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Initialize Slick Slider for images
    if (document.querySelector('.featuredslider')) {
        $('.featuredslider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000
        });
    }

    // Toggle "See More" button
    const seeMoreBtn = document.getElementById('see-more');
    const fullDescription = document.getElementById('full-description');
    const description = document.getElementById('description');
    if (seeMoreBtn) {
        seeMoreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            fullDescription.classList.toggle('hidden');
            seeMoreBtn.textContent = fullDescription.classList.contains('hidden') ? 'See More' : 'See Less';
        });
    }
});

</script>


@endsection
