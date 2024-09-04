@extends('layouts.master')
@section('title',"Content")


<section class="container mx-auto px-4 py-8 max-w-3xl">
    <!-- Slideshow Section -->
    <div class="mb-8">
        <div class="relative">
            <div class="slick-slider">
                <div><img src="path-to-image1.jpg" alt="Blog Image 1" class="w-full h-auto object-cover rounded"></div>
                <div><img src="path-to-image2.jpg" alt="Blog Image 2" class="w-full h-auto object-cover rounded"></div>
                <div><img src="path-to-image3.jpg" alt="Blog Image 3" class="w-full h-auto object-cover rounded"></div>
                <!-- Add more images as needed -->
            </div>
        </div>
    </div>

    <!-- Author and Time -->
    <div class="text-gray-600 mb-4">
        <span class="font-semibold">Author Name</span> | <span>Posted on Posted Time</span>
    </div>

    <!-- Main Heading -->
    <h1 class="text-4xl font-bold mb-4">Main Heading</h1>

    <!-- Subheading -->
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Subheading</h2>

    <!-- Description with "Show more" -->
    <div class="text-gray-700 mb-6">
        <p id="description" class="mb-4">
            This is the blog post description. It will show up to 400 words initially. The remaining content will be hidden until the "Show more" button is clicked.
        </p>
        <button id="showMore" class="text-blue-500 hover:underline">Show more</button>
    </div>

    <!-- Social Media Share Buttons -->
    <div class="flex gap-4 mb-8">
        <a href="#" class="text-blue-500"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="#" class="text-pink-500"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#" class="text-blue-400"><i class="fab fa-twitter"></i> Twitter</a>
    </div>

    <!-- Comment Section -->
    <div class="bg-gray-100 p-6 rounded-lg">
        <h3 class="text-2xl font-semibold mb-4">Leave a Comment</h3>
        <form>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-gray-700">Comment</label>
                <textarea id="comment" name="comment" class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</section>




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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049C16 3.604 12.418 0 8 0S0 3.604 0 8.049C0 12.02 2.93 15.234 6.75 15.984v-5.66H4.897V8.049H6.75V6.275c0-1.845 1.058-2.866 2.678-2.866.775 0 1.596.139 1.596.139v1.77H9.926c-.934 0-1.226.581-1.226 1.176v1.555h2.316l-.371 2.275H8.7v5.66C12.52 15.234 16 12.02 16 8.049z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.008-.422A6.68 6.68 0 0 0 16 3.542a6.573 6.573 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.573 6.573 0 0 1-2.084.797A3.286 3.286 0 0 0 7.88 6.03a9.325 9.325 0 0 1-6.766-3.429 3.286 3.286 0 0 0 1.017 4.381A3.323 3.323 0 0 1 .64 6.575v.041a3.286 3.286 0 0 0 2.634 3.218 3.203 3.203 0 0 1-.864.114c-.21 0-.415-.02-.615-.058a3.286 3.286 0 0 0 3.067 2.282 6.587 6.587 0 0 1-4.862 1.356A9.286 9.286 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205a2.56 2.56 0 0 1-1.155-.68 2.56 2.56 0 0 1-.68-1.155c-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 4.254a3.746 3.746 0 1 0 0 7.492 3.746 3.746 0 0 0 0-7.492zm0 6.148a2.402 2.402 0 1 1 0-4.804 2.402 2.402 0 0 1 0 4.804zm4.411-6.148a.902.902 0 1 0 0 1.804.902.902 0 0 0 0-1.804z"/>
                        </svg>
                        
                        
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205-.44-.13-.774-.297-1.155-.68-.383-.383-.55-.717-.68-1.155-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 3.4a4.6 4.6 0 1 0 0 9.2 4.6 4.6 0 0 0 0-9.2zm0 1.2a3.4 3.4 0 1 1 0 6.8 3.4 3.4 0 0 1 0-6.8zm4.832-.1a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>

           
            <!-- Useful Services -->
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <h4 class="text-[25px] font-semibold mb-4">Useful Services</h4>
                <ul>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">House Removals</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Melbourne Removalists</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Office Removalists</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Man With Van</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Furniture Removals</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Packing Service</a></li>
                </ul>
            </div>

            <!-- Relocating Options -->
            <div class="w-full md:w-1/4">
                <h4 class="text-[25px] font-semibold mb-4">Relocating</h4>
                <ul>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-offer</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-a-quote</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Request-a-free-call</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Request-a-call-back</a></li>
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


<script>
      document.getElementById("showMore").addEventListener("click", function() {
        let description = document.getElementById("description");
        description.innerHTML += " [Add remaining description content here...]";
        this.style.display = 'none';
    });

</script>