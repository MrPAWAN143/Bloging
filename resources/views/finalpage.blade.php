@extends('layouts.master')
@section('title', 'Index')
@section('navbar')
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
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

    <div class="max-w-4xl mx-auto w-[800px] p-4 bg-white shadow-lg rounded-lg mt-0">

        <!-- Slick Slider for Images -->
        <div id="custom-slider" class="mt-0 h-[400px]">
            @foreach ($blog->images as $image)
                <div class="h-[400px]">
                    @if ($blog->images->isNotEmpty())
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $blog->heading }}"
                            class="w-full h-full object-cover rounded-t-lg mb-4">
                    @else
                        <!-- Placeholder space for the image -->
                        <div class="w-full h-52 bg-gray-300 flex items-center justify-center rounded-t-lg mb-4">
                            <span class="text-gray-500">Image not available</span>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Heading, Author Name, and Post Time -->
        <h1 class="text-3xl font-bold mb-4 text-center md:text-left">{{ $blog->heading }}</h1>
        <p class="text-gray-600 text-center md:text-left">By {{ $blog->author }} | Posted on
            {{ $blog->created_at->format('M d, Y') }}</p>

        <!-- Subheading -->

        <!-- Description with "Show More" functionality -->
        <div class="mt-6">
            <p id="short-description" class="text-gray-700">
                {{ Str::limit($blog->description, 200) }}
            </p>
            <p id="full-description" class="text-gray-700 hidden">
                {{ $blog->description }}
            </p>
            <button id="show-more-btn" class="text-blue-500 hover:underline mt-2">Show More</button>
        </div>


        <!-- Social Media Share Buttons -->
        <div class="flex gap-4 mb-8 mt-6">
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


        <!-- Comment Form -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4 text-center md:text-left">Leave a Comment</h2>
            <form class="space-y-4">
                <div class="flex flex-col">
                    <label for="name" class="mb-1 text-sm font-semibold">Name</label>
                    <input type="text" id="name" class="px-3 py-2 border rounded-md" placeholder="Your Name"
                        required>
                </div>

                <div class="flex flex-col">
                    <label for="email" class="mb-1 text-sm font-semibold">Email</label>
                    <input type="email" id="email" class="px-3 py-2 border rounded-md" placeholder="Your Email"
                        required>
                </div>

                <div class="flex flex-col">
                    <label for="comment" class="mb-1 text-sm font-semibold">Comment</label>
                    <textarea id="comment" rows="4" class="px-3 py-2 border rounded-md" placeholder="Your Comment" required></textarea>
                </div>

                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </div>



    </div>

    <div class="max-w-sm mx-auto m-6 bg-white shadow-md rounded-lg overflow-hidden flex flex-col md:flex-row p-4">



        <!-- Related Blogs -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">Author</h3>
            <div class="space-y-4">
                <!-- Example Related Blog Item -->
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/100x75" alt="Related Blog Image"
                        class="w-24 h-18 rounded-lg object-cover">
                    <div>
                        <h4 class="text-xl font-bold">Author Name</h4>
                        <p class="text-gray-600">Short description of the related blog...</p>
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <!-- Add more related blogs here -->
            </div>
        </div>
    </div>




    <script>
        document.getElementById("show-more-btn").addEventListener("click", function() {
            var fullDescription = document.getElementById("full-description");
            var shortDescription = document.getElementById("short-description");

            if (fullDescription.classList.contains('hidden')) {
                fullDescription.classList.remove('hidden');
                shortDescription.classList.add('hidden');
                this.textContent = 'Show Less';
            } else {
                fullDescription.classList.add('hidden');
                shortDescription.classList.remove('hidden');
                this.textContent = 'Show More';
            }
        });


        // Initialize Slick Slider with custom ID
        $(document).ready(function() {
            $('#custom-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                        }
                    }
                ]
            });
        });
    </script>
@endsection





@section('footer')

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4" style="max-width: 85%;">
            <div class="flex flex-wrap justify-between">
                <!-- Logo and Social Media -->
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <img src="../assest/images/logo.webp" alt="Company Logo" class="mb-4">
                    <div class="flex space-x-4">
                        <!-- Social Media Icons -->
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049C16 3.604 12.418 0 8 0S0 3.604 0 8.049C0 12.02 2.93 15.234 6.75 15.984v-5.66H4.897V8.049H6.75V6.275c0-1.845 1.058-2.866 2.678-2.866.775 0 1.596.139 1.596.139v1.77H9.926c-.934 0-1.226.581-1.226 1.176v1.555h2.316l-.371 2.275H8.7v5.66C12.52 15.234 16 12.02 16 8.049z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.008-.422A6.68 6.68 0 0 0 16 3.542a6.573 6.573 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.573 6.573 0 0 1-2.084.797A3.286 3.286 0 0 0 7.88 6.03a9.325 9.325 0 0 1-6.766-3.429 3.286 3.286 0 0 0 1.017 4.381A3.323 3.323 0 0 1 .64 6.575v.041a3.286 3.286 0 0 0 2.634 3.218 3.203 3.203 0 0 1-.864.114c-.21 0-.415-.02-.615-.058a3.286 3.286 0 0 0 3.067 2.282 6.587 6.587 0 0 1-4.862 1.356A9.286 9.286 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205a2.56 2.56 0 0 1-1.155-.68 2.56 2.56 0 0 1-.68-1.155c-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 4.254a3.746 3.746 0 1 0 0 7.492 3.746 3.746 0 0 0 0-7.492zm0 6.148a2.402 2.402 0 1 1 0-4.804 2.402 2.402 0 0 1 0 4.804zm4.411-6.148a.902.902 0 1 0 0 1.804.902.902 0 0 0 0-1.804z" />
                            </svg>


                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205-.44-.13-.774-.297-1.155-.68-.383-.383-.55-.717-.68-1.155-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 3.4a4.6 4.6 0 1 0 0 9.2 4.6 4.6 0 0 0 0-9.2zm0 1.2a3.4 3.4 0 1 1 0 6.8 3.4 3.4 0 0 1 0-6.8zm4.832-.1a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z" />
                            </svg>
                        </a>
                    </div>
                </div>


                <!-- Useful Services -->
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h4 class="text-[25px] font-semibold mb-4">Useful Services</h4>
                    <ul>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">House Removals</a>
                        </li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Melbourne
                                Removalists</a></li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Office Removalists</a>
                        </li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Man With Van</a></li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Furniture Removals</a>
                        </li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Packing Service</a>
                        </li>
                    </ul>
                </div>

                <!-- Relocating Options -->
                <div class="w-full md:w-1/4">
                    <h4 class="text-[25px] font-semibold mb-4">Relocating</h4>
                    <ul>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-offer</a></li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-a-quote</a></li>
                        <li class="py-2"><a href="#"
                                class="hover:text-gray-400 py-2 px-4">Request-a-free-call</a></li>
                        <li class="py-2"><a href="#"
                                class="hover:text-gray-400 py-2 px-4">Request-a-call-back</a></li>
                        <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mt-8 text-center">
                <p class="text-gray-400">Email: info@company.com | Phone: (123) 456-7890</p>
            </div>
        </div>
    </footer>

@endsection
