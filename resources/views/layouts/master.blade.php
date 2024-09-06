<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('metaimagedelete')
    <title>@yield('title')</title>
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
            background-color: #f3f4f6; /* Light gray background for header */
            z-index: 10;
        }
        th, td {
            border: 1px solid #e5e7eb; /* Light gray border */
        }


        #success-message {
        transition: opacity 0.6s ease-out; /* Adjust duration as needed */
    }
    </style>
    
</head>
<body>
    @yield('navbar')

    @yield('logordashboard')
    @yield('IndexPage')
    @yield('banner')

    @yield('futureSection')

    @yield('dashboardPage')

    @yield("dashbordcontant")

    @yield('explore')

    @yield('customerReview')









    
    


@yield('footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Get all menu links
    const menuLinks = document.querySelectorAll('a[data-target]');
    
    // Get all sections
    const addPostSection = document.getElementById('add-post');
    const editPostSection = document.getElementById('edit-post');
    const showPostsSection = document.getElementById('show-posts');
    
    // Function to hide all sections
    function hideAllSections() {
        if (addPostSection) addPostSection.classList.add('hidden');
        if (editPostSection) editPostSection.classList.add('hidden');
        if (showPostsSection) showPostsSection.classList.add('hidden');
    }
    
    // Add click event listener to all menu links
    menuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            // event.preventDefault(); // Prevent default link behavior
            
            // Get the target section id
            const targetId = this.getAttribute('data-target');
            
            // Hide all sections
            hideAllSections();
            
            // Show the targeted section
            const targetSection = document.getElementById(targetId);
            if (targetSection) targetSection.classList.remove('hidden');
        });
    });
    
    // Add click event listener to the "Edit Post" links in the table
    document.querySelectorAll('#show-posts a[data-target="edit-post"]').forEach(link => {
        link.addEventListener('click', function (event) {
            // event.preventDefault(); // Prevent default link behavior

            // Hide the "Show Posts" section
            if (showPostsSection) showPostsSection.classList.add('hidden');

            // Show the "Edit Post" section
            if (editPostSection) editPostSection.classList.remove('hidden');
        });
    });

    // Add click event listener to the "Back to Show Posts" link
    const backToShowPostsLink = document.getElementById('back-to-show-posts');
    if (backToShowPostsLink) {
        backToShowPostsLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior

            // Hide the "Edit Post" section
            if (editPostSection) editPostSection.classList.add('hidden');

            // Show the "Show Posts" section
            if (showPostsSection) showPostsSection.classList.remove('hidden');
        });
    }
});


</script>



<!-- Add this script at the bottom of your Blade file -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('button[data-image-id]').forEach(button => {
            button.addEventListener('click', function () {
                const imageId = this.getAttribute('data-image-id');

                if (confirm('Are you sure you want to delete this image?')) {
                    fetch(`/post-blog-image/${imageId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
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
                }, 5000); // Time in milliseconds (5 seconds)
            }
        });
    </script>




    


    <script>
   document.addEventListener('DOMContentLoaded', () => {
    // Toggle user dropdown menu
    document.getElementById('user-menu').addEventListener('click', () => {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('show');
    });

    // Toggle category and posts submenus
    document.querySelectorAll('[data-toggle]').forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const menuId = toggle.getAttribute('data-toggle');
            const menu = document.getElementById(menuId);
            if (menu) {
                menu.classList.toggle('show');
            }
        });
    });

    // Show/hide sections
    const showSection = (id) => {
        // Hide all sections
        document.querySelectorAll('#content > div').forEach(div => div.classList.add('hidden'));
        // Optionally hide child divs if needed
        document.querySelectorAll(`#${id} > div`).forEach(div => div.classList.add('hidden'));
        // Show the selected section
        const targetSection = document.getElementById(id);
        if (targetSection) {
            targetSection.classList.remove('hidden');
        }
    };

    // Add event listeners to sidebar buttons and links
    document.querySelectorAll('nav a[data-target], nav button[data-target]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = link.getAttribute('data-target');
            
            if (sectionId) {
                showSection(sectionId);
            }

            // Highlight active menu item
            document.querySelectorAll('nav a').forEach(item => {
                item.classList.remove('active');
                item.style.fontWeight = 'normal'; // Reset all items to normal font weight
                item.style.backgroundColor = 'transparent'
            });
            link.classList.add('active');
            link.style.fontWeight = 'bold'; // Set the clicked item to bold font weight
            link.style.backgroundColor = '#4F2937'
        });
    });

    // Show the form/content when a submenu is clicked
    document.querySelectorAll('nav a[data-target]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = link.getAttribute('data-target');
            const parentSection = link.closest('ul')?.getAttribute('id')?.replace('-menu', '-section');
            if (parentSection) {
                showSection(parentSection);
                document.getElementById(sectionId)?.classList.remove('hidden');
            }
        });
    });

    // Show default dashboard on load
    showSection('dashboard');
});


    </script>

   <!-- Initialize Slick Slider -->
<script>

  // Show more functionality
  $('#show-more').click(function() {
            $('#extra-content').toggleClass('hidden');
            $(this).text($(this).text() === 'Show more' ? 'Show less' : 'Show more');
        });



    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: false,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>



    <script>
        $(document).ready(function(){
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 3500,
                dots: true,
                arrows: false,
                infinite: true,
                fade: false,
                cssEase: 'linear',
                responsive: [
                    {
                        breakpoint: 1024, // Desktop
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 768, // Tablet
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 640, // Mobile
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>




<!-- Initialize Slick Slider -->

    
</body>
</html>