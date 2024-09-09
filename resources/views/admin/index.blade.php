<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
 @yield('metacsrf')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>s --}}

    <!-- jQuery (required for Slick Slider) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../assest/style.css">
    <!-- Slick Slider CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

    <style>
        /* Custom styles for dropdown */
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .table-container {
            max-height: 90vh;
            overflow-y: auto;
        }

        thead th {
            position: sticky;
            top: 0;
            background-color: #f3f4f6;
            /* Light gray background for header */
            z-index: 10;
        }

        th,
        td {
            border: 1px solid #e5e7eb;
            /* Light gray border */
        }


        #success-message {
            transition: opacity 0.6s ease-out;
            /* Adjust duration as needed */
        }
    </style>
</head>

<body>

    <!-- Main Container -->
    <div class="flex h-screen">


        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="flex items-center justify-between p-4 border-b border-gray-700">
                <h1 class="text-lg font-semibold">PHP Blog</h1>
                <div class="relative">
                    <!-- Username Button -->
                    <button id="user-menu"
                        class="flex items-center space-x-2 text-gray-300 hover:text-white focus:outline-none"
                        onclick="toggleDropdown('dropdown-menu')">
                        <span id="username">Username</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdown-menu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded shadow-lg z-10">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                        <a href="{{ url('/logout') }}" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                    </div>
                </div>
            </div>

            <nav class="flex-1">
                <ul class="mt-4">


                    <!-- Success Message -->
                    <li>
                        @if (session('success'))
                            <div id="success-message"
                                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <!-- Error Message -->
                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>


                    <li>
                        <a href="{{ url('/admin') }}"
                            class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item"
                            data-target="dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/registeruser') }}"
                            class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item"
                            data-target="register-users">Register Users</a>
                    </li>

                    <!-- Category Menu Button -->
                    <li>
                        <button
                            class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item focus:outline-none"
                            onclick="toggleDropdown('category-menu')">
                            Category
                        </button>
                        <ul id="category-menu" class="hidden pl-4 mt-2">
                            <li><a href="{{ url('/admin/addcategories') }}"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item">Add
                                    Category</a></li>
                            <li><a href="{{ url('/admin/editcategories') }}"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item">Edit
                                    Category</a></li>
                        </ul>
                    </li>

                    <!-- Posts Menu Button -->
                    <li>
                        <button
                            class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item focus:outline-none"
                            onclick="toggleDropdown('posts-menu')">
                            Posts
                        </button>
                        <ul id="posts-menu" class="hidden pl-4 mt-2">
                            <li><a href="{{ url('/admin/addposts') }}"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item">Add
                                    Post</a></li>
                            <li><a href="{{ url('/admin/editposts') }}"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-700 sidebar-menu-item">Edit
                                    Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="border-t border-gray-700 p-4">
                <a href="#" class="block text-gray-300 hover:text-white">Settings</a>
            </div>
        </div>



        <div class="flex-1 p-4 overflow-y-auto pt-0">
            <div id="content" class="bg-white rounded-lg  p-6">

                @yield('dashboardcontaint')


                @yield('registeruser')


                @yield('addCategory')



                @yield('editcategories')


                @yield('addposts')


                @yield('editcategoriesform')

                @yield('editposts')

                @yield('editpostsform')

            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        function confirmDeletion() {
            return confirm('Are you sure you want to delete this image?');
        }
    </script>

<script>
    function deleteImage(imageId) {
        if (confirm('Are you sure you want to delete this image?')) {
            // Get the image element's container (the div with the image)
            let imageElement = document.getElementById(`image-${imageId}`);

            // Send a DELETE request to delete the image on the server
            let url = `/post_blog/${imageId}/delete_image`;  // Adjust the URL to match your route structure
            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // If the image was successfully deleted on the server, remove the image element from the DOM
                    imageElement.remove();
                } else {
                    alert('Failed to delete image');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // alert('An error occurred while trying to delete the image.');
            });
        }
    }
</script>







    <script>
        // Function to toggle the dropdown visibility
        function toggleDropdown(menuId) {
            var dropdownMenu = document.getElementById(menuId);
            dropdownMenu.classList.toggle('hidden');
        }

        // Close all dropdowns when clicking outside of them
        window.onclick = function(event) {
            if (!event.target.matches('.sidebar-menu-item') && !event.target.closest('.dropdown-menu')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }
    </script>




    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Check if the success message exists
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                // Set timeout to hide the success message after 5 seconds (5000 milliseconds)
                setTimeout(() => {
                    successMessage.style.opacity = '0'; // Fade out effect
                    setTimeout(() => {
                        successMessage.style.display = 'none'; // Hide completely after fade out
                    }, 600); // Allow time for the fade-out effect
                }, 2000); // Time in milliseconds (5 seconds)
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('button[data-image-id]').forEach(button => {
                button.addEventListener('click', function() {
                    const imageId = this.getAttribute('data-image-id');

                    if (confirm('Are you sure you want to delete this image?')) {
                        fetch(`/post-blog-image/${imageId}`, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content'),
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // Remove the image from the DOM
                                    button.closest('div.group').remove();
                                } else {
                                    alert('Failed to delete image');
                                }
                            });
                    }
                });
            });
        });
    </script>





    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Toggle user dropdown menu
            document.getElementById('user-menu').addEventListener('click', () => {
                const menu = document.getElementById('dropdown-menu');
                menu.classList.toggle('show');
            });

        });
    </script>

   





</body>

</html>
