<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHY-DISPLAY</title>
    
    <link rel="shortcut icon" href="/asset/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://kit.fontawesome.com/570f3f9e71.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/home.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- NAV-BAR SECTION BEGINS-->
    <div class="nav_bar">
        <img src="asset/images/logo1.jpg"  alt="">
        <svg id="menu-icon" style="width:25px; fill:rgb(18, 44, 130)"class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv menu-icon" focusable="false" viewBox="0 0 24 24" aria-hidden="true" data-testid="MenuIcon" style="color: rgb(18, 44, 130); font-size: 25px;"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
        <ul id="dropdown" >
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
   <div class="footer" data-aos="fade-up" data-aos-offset="-350"
            data-aos-delay="0"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center">
        <div class="foot_up">
            <div class="foot_cont">
                <div class="cont_img">
                    <img src="asset/images/logo1.jpg" alt="">
                </div>
                <p>
                    PHY-ELECT-RSU is device designed and constructed for the Physics/electronics option
                     in the department of Physics, Rivers State University to communicate relevant information 
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
                <ul id="last_foot_cont">
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
                    
                </ul>
            </div>
        </div>
        <div class="foot_down">
                <div class="cont">
                    <p style="margin-left: 10px">Supported By</p>
                    <a href="https://www.linkedin.com/in/engr-e-f-idema-735a18230?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="asset/images/riipson.jpeg" alt=""></a>
                </div>
            <div class="cont">
                <p>© PHY-ELECT-RSU 2023. All rights reserved.</p>
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