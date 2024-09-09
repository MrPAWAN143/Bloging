@extends('layouts.master')
@section('title', 'Home')

@section('navbar')
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
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




@section('banner')

    <div class="banner-slider">
        <div>
            <img src="assest/images/banner1.jpg" alt="Banner 1" class="w-full h-[550px] object-cover">
        </div>
        <div>
            <img src="assest/images/banner2.jpg" alt="Banner 2" class="w-full h-[550px] object-cover">
        </div>
        <div>
            <img src="assest/images/banner3.jpg" alt="Banner 3" class="w-full h-[550px] object-cover">
        </div>
    </div>

@endsection

@section('futureSection')

    <section class="bg-gray-100 py-6">
        <div class="container px-4 m-auto">
            <!-- Section Heading with Blue Circle -->
            <div class="flex items-center mb-6">
                <div class="w-8 h-8 bg-blue-500 rounded-full mr-2"></div>
                <h2 class="text-4xl font-bold">Featured</h2>
            </div>

            <div class="flex flex-col lg:flex-row gap-4">
                <!-- First Section: Full-width item -->
                <div class="lg:w-1/2 bg-gray-200 flex flex-col rounded-lg">
                    <img src="assest/images/featured1.jpg" alt="Blog Image" class="w-full h-80 object-cover rounded-t-lg">
                    <div class="p-4 flex flex-col flex-1">
                        <h2 class="text-[40px] font-extrabold mb-2 tracking-widen leading-10">Are You Looking for the Best
                            Deals On Removal Quotes Online?</h2>
                        <p class="text-gray-600 mb-2">By <span class="font-semibold">Author Name</span> | Posted on <span
                                class="font-semibold">Posted Time</span></p>
                        <p class="text-gray-700 flex-1 text-[18px] ">This is a detailed description of the blog post. It
                            should be a concise summary, about 50 words long, providing an overview of the content to entice
                            readers to learn more.</p>
                        <a href="#" class="text-blue-500 hover:underline mt-2">Learn More</a>
                    </div>
                </div>

                <!-- Second Section: Four items in horizontal rows -->
                <div class="lg:w-1/2 flex flex-col gap-4">
                    <div class="flex gap-4">
                        <!-- First Row -->
                        <div class="bg-gray-200 flex flex-col flex-1 rounded-lg">
                            <img src="assest/images/featured2.jpg" alt="Blog Image"
                                class="w-full h-40  object-cover rounded-t-lg">
                            <div class="p-4 flex flex-col flex-1">
                                <h2 class="text-[25px] font-semibold mb-1">Blog Heading</h2>
                                <p class="text-gray-700 flex-1 text-[20px] leading-6">This is a brief description of the
                                    blog post.</p>
                                <a href="#" class="text-blue-500 hover:underline mt-2">Learn More</a>
                            </div>
                        </div>

                        <div class="bg-gray-200 flex flex-col flex-1 rounded-lg">
                            <img src="assest/images/featured3.jpg" alt="Blog Image"
                                class="w-full h-40 object-cover rounded-t-lg">
                            <div class="p-4 flex flex-col flex-1">
                                <h2 class="text-[25px] font-semibold mb-1">Blog Heading</h2>
                                <p class="text-gray-700 flex-1 text-[20px] leading-6">This is a brief description of the
                                    blog post.</p>
                                <a href="#" class="text-blue-500 hover:underline mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <!-- Second Row -->
                        <div class="bg-gray-200 flex flex-col flex-1 rounded-lg">
                            <img src="assest/images/featured4.jpg" alt="Blog Image"
                                class="w-full  h-40  object-cover rounded-t-lg">
                            <div class="p-4 flex flex-col flex-1">
                                <h2 class="text-[25px] font-semibold mb-1">Blog Heading</h2>
                                <p class="text-gray-700 flex-1 text-[20px] leading-6">This is a brief description of the
                                    blog post.</p>
                                <a href="#" class="text-blue-500 hover:underline mt-2">Learn More</a>
                            </div>
                        </div>

                        <div class="bg-gray-200 flex flex-col flex-1 rounded-lg">
                            <img src="assest/images/featured5.jpg" alt="Blog Image"
                                class="w-full h-40  object-cover rounded-t-lg">
                            <div class="p-4 flex flex-col flex-1">
                                <h2 class="text-[25px] font-semibold mb-1">Blog Heading</h2>
                                <p class="text-gray-700 flex-1 text-[20px] leading-6">This is a brief description of the
                                    blog post. </p>
                                <a href="#" class="text-blue-500 hover:underline mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection






@section('dashbordcontant')

<section class="py-6 bg-gray-100">
    <div class="container m-auto px-4">
        <div class="flex items-center mb-6">
            <div class="w-8 h-8 bg-gray-500 rounded-full mr-2"></div>
            <h2 class="text-4xl font-bold">Latest Blog</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-7">
            @foreach($blogs as $blog)
            <!-- Blog Item -->
            <div class="p-4 rounded-lg shadow-lg bg-blue-50">
                @if($blog->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $blog->images->first()->image_path) }}" alt="{{ $blog->heading }}"
                        class="w-full h-52 object-cover rounded-t-lg mb-4">
                @else
                    <!-- Placeholder space for the image -->
                    <div class="w-full h-52 bg-gray-300 flex items-center justify-center rounded-t-lg mb-4">
                        <span class="text-gray-500">Image not available</span>
                    </div>
                @endif
                <h3 class="text-xl font-semibold mb-2">{{ $blog->heading }}</h3>
                <p class="text-sm text-gray-500 mb-2">By {{ $blog->author }} | <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('F d, Y') }}</time></p>
                <p class="text-gray-700 text-sm mb-4">
                    {{ Str::limit($blog->description, 150) }}
                </p>
                <a href="{{ route('blog.show', $blog->slug) }}" class="text-blue-500 hover:underline">Learn More</a>
            </div>
            @endforeach
        </div>
    </div>
</section>






@endsection



@section('explore')



    <section class="bg-gray-100 py-6">
        <div class="container mx-auto px-4">
            <!-- Section Heading -->
            <div class="flex items-center mb-6">
                <div class="w-8 h-8 bg-green-500 rounded-full mr-2"></div>
                <h2 class="text-4xl font-bold">Explore more</h2>
            </div>

            <!-- Slick Slider -->
            <div class="slick-slider">
                <!-- Item 1 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-1.html'">
                        <img src="assest/images/explore1.jpg" alt="Blog Image 1"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 1</span> | Posted on
                            <span class="font-semibold">Date 1</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 1 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                </div>

                <!-- Item 2 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-2.html'">
                        <img src="assest/images/explore2.jpg" alt="Blog Image 2"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 2</span> | Posted on
                            <span class="font-semibold">Date 2</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 2 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-3.html'">
                        <img src="assest/images/explore3.jpg" alt="Blog Image 3"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 3</span> | Posted on
                            <span class="font-semibold">Date 3</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 3 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore4.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 4 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore5.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 5 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore6.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 6 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore7.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 7 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 8 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore8.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 8 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 9 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore9.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 9 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Item 10 -->
                <div class="m-3">
                    <div class="p-4 bg-white rounded-lg shadow cursor-pointer"
                        onclick="window.location.href='link-to-page-4.html'">
                        <img src="assest/images/explore10.jpg" alt="Blog Image 4"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <p class="text-gray-500 text-sm mt-2">By <span class="font-semibold">Author 4</span> | Posted on
                            <span class="font-semibold">Date 4</span>
                        </p>
                        <h3 class="text-[26px] font-bold">Item 10 Heading</h3>
                        <p class="text-[20px] text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection





@section('customerReview')

    <!-- Customer Review Section -->
    <section class="py-6 bg-gray-100">
        <div class="container mx-auto px-4" style="max-width: 95%;">
            <h2 class="text-3xl font-bold text-center mb-12">Customer Reviews</h2>
            <div class="slick-slider gap-3">
                <!-- Review Item 1 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 1"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 1</p>
                        <p class="text-gray-600 mb-4">"This is a fantastic product! It exceeded my expectations."</p>
                        <div class="text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 2 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 2"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 2</p>
                        <p class="text-gray-600 mb-4">"Great service and friendly support. Highly recommend!"</p>
                        <div class="text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <!-- Review Item 3 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 3"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 3</p>
                        <p class="text-gray-600 mb-4">"Good value for the money. Will definitely buy again."</p>
                        <div class="text-yellow-400">
                            ★★★☆☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 4 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 4"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 4</p>
                        <p class="text-gray-600 mb-4">"The quality is superb and the delivery was fast."</p>
                        <div class="text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <!-- Review Item 5 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 5"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 5</p>
                        <p class="text-gray-600 mb-4">"I’m very satisfied with this purchase. Excellent quality."</p>
                        <div class="text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 6 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 6"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 6</p>
                        <p class="text-gray-600 mb-4">"Great value for the price. Will definitely recommend."</p>
                        <div class="text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 7 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 7"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 7</p>
                        <p class="text-gray-600 mb-4">"The product met all my expectations and more."</p>
                        <div class="text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <!-- Review Item 8 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 8"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 8</p>
                        <p class="text-gray-600 mb-4">"Fast delivery and great quality. I’m impressed."</p>
                        <div class="text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 9 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 9"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 9</p>
                        <p class="text-gray-600 mb-4">"Fast delivery and great quality. I’m impressed."</p>
                        <div class="text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <!-- Review Item 10 -->
                <div class="m-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="assest/images/review2.jpg" alt="Customer 10"
                            class="w-24 h-24 rounded-full mx-auto mb-4">
                        <p class="text-lg font-semibold mb-2">Customer Name 10</p>
                        <p class="text-gray-600 mb-4">"Excellent product. Worth every penny!"</p>
                        <div class="text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
