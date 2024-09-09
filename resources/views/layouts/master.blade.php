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