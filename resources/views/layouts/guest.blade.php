{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHY-DISPLAY</title>
    
    <link rel="stylesheet" href="asset/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/home.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- NAV-BAR SECTION BEGINS-->
    <div class="nav_bar">
        <img src="asset/images/logo.png" alt="">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#our_work">Our Work</a></li>
            <li><a href="{{ route('dashboard') }}">Displayed</a></li>
            <li><a href="#about">About Us</a></li>
            @if (Auth::user())
            <li><a href="{{ route('login') }}">{{Auth::user()->name}}</a></li>
            @else
            <li><a href="{{ route('login') }}">Sign In</a></li>
            @endif
        </ul>
    </div>
    <!-- NAV-BAR SECTION ENDS-->

    {{ $slot }}

    <!-- ABOUT-US SECTION ENDS -->

    <!-- FOOTER SECTION BEGINS -->
   <div class="footer" data-aos="fade-up" data-aos-offset="-150"
            data-aos-delay="0"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center">
        <div class="foot_up">
            <div class="foot_cont">
                <div class="cont_img">
                    <img src="asset/images/rsudisplay.png" alt="">
                </div>
                <p>
                    PHYDISPLAY is device designed and constructed for
                    the Physics/electronics option in the department of Physics,
                    Rivers State University to communicate relevant information
                    to all students of Physics department and others.
                </p>
            </div>
            <div class="foot_cont">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a> </li>
                    <li><a href="#our_work">Our Work</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="{{ route('dashboard') }}">Displayed</a></li>
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                    <li><a href="{{ route('login') }}">Sign In</a></li>
                </ul>
            </div>
            <div class="foot_cont">
                <h4>Explore More</h4>
                <ul>
                    <li>
                        <a href="https://www.researchgate.net/profile/Nicholas-Tasie">
                            Dr. Nicholas N.  Tasie
                        </a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCkLcyCC2v-23ZTGmlNgreqw">
                            Adeniyi Sodiq Munirudeen
                        </a>
                    </li>
                    <li><a href="https://twitter.com/danny_4reel">
                            Amah Daniel Aniekan
                        </a>
                    </li>
                    <li><a href="https://web.facebook.com/wisdom.moses.144734">
                            Eze Wisdom Moses
                        </a>
                    </li>
                    <li><a href="https://twitter.com/STARrtsomewhere">
                            Esther Tochi Ogbegbe
                        </a>
                    </li>
                    {{-- <li>Nyenke Anthony Udokanma</li>
                    <li>Emmanuel Dennis</li> --}}
                </ul>
            </div>
        </div>
        <div class="foot_down">
            <div class="cont">
                <a href="https://www.rsu.edu.ng/"><img src="asset/images/rsuwhite.png" alt=""></a>
            </div>
            <div class="cont">
                <p>© PHY-DISPLAY 2023. All right reserved.</p>
            </div>
        </div>
    </div> 

    <!-- FOOTER SECTION ENDS -->







    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="asset/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="asset/js/script.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>