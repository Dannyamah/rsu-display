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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard</title>	
<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->	
<link rel="shortcut icon" href="/asset/images/favicon.ico" type="image/x-icon">
<link href="/d_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="/d_assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css"/>
<link href="/d_assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
<link href="/../../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css"/>
<link href="/d_assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="/d_assets/css/style.css" rel="stylesheet" type="text/css"/>
			
<style>
    .power-button {
        width: 60px;
        height: 50px;
        background-color: red;
        border-radius: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-left: 20px;
    }

    .power-button.on {
        background-color: green;
    }

    .power-button-text {
        margin-right: 10px;
    }
</style>



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('welcome') }}" class="brand-logo">
							<img class="logo-abbr" src="/asset/images/logo2.jpg" style="max-width: 80px; height: auto" alt="">
						                <img class="logo-compact" src="/asset/images/logo2.jpg" style="max-width: 80px; alt="">
                <img class="brand-title" src="/asset/images/logo2.jpg" style="max-width: 80px;">
				
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
     
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            
                        </div>

                        <ul class="navbar-nav header-right">
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span class="text-black">{{ Auth::user()->name }}</span>
									</div>
                                    <img  src="/d_assets/images/profile/17.jpg" width="20" alt=""/>
                                </a>
                                {{-- @if (Auth::user()->role == 'admin')
                                <div class="power-button-container">
                                    <div class="power-button text-center" id="powerButton">
                                        <span class="power-button-text">OFF</span>
                                        <div class="power-button-switch"></div>
                                    </div>
                                </div>
                                @endif --}}
                    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>		
		
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @if (Auth::user()->role == 'admin')
       <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Displayed Messages</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="{{ route('message.add') }}" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Add Scrolling Message</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="{{ route('static.add') }}" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Add Static Message</span>
                    </a>
                </li>
                {{-- <div class="power-button-container">
                    <label for="powerButton" class="power-button-label">Turn Off Device</label>
                    <div class="power-button" id="powerButton">
                        <span class="power-button-text">OFF</span>
                        <div class="power-button-switch"></div>
                    </div>
                </div> --}}
            </ul>
            
            
        </div>
    </div>
       @else
       <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Displayed Messages</span>
                    </a>
                </li>
            </ul>
            
            
        </div>
    </div>
       @endif
       
                <!--**********************************
            Sidebar end
        ***********************************-->

		
		
			{{ $slot }}


        <!--**********************************
            Footer start
        ***********************************-->
        
		<div class="footer">
    
</div>		
    

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	<script src="/d_assets/vendor/global/global.min.js" type="text/javascript"></script>
					<script src="/d_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
				<script src="/d_assets/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
				<script src="/d_assets/js/custom.min.js" type="text/javascript"></script>
				<script src="/d_assets/js/deznav-init.js" type="text/javascript"></script>
	
	<script id="DZScript" src="/../../../dzassets.s3.amazonaws.com/w3-global8bb6.js?btn_dir=right"></script>

    <script>
        // JavaScript code to fetch and display the API response
        fetch('/api/message')
            .then(response => response.json())
            .then(data => {
                document.getElementById('message').textContent = data.message;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>

	<script>
		const copyButton = document.getElementById("copyButton");
		const trackingIdSpan = document.getElementById("trackingId");
		const copyMessage = document.getElementById("copyMessage");
	
		copyButton.addEventListener("click", () => {
			const trackingId = trackingIdSpan.textContent;
			const tempTextArea = document.createElement("textarea");
			tempTextArea.value = trackingId;
			document.body.appendChild(tempTextArea);
			tempTextArea.select();
			document.execCommand("copy");
			document.body.removeChild(tempTextArea);
			
			copyMessage.style.display = "block";
			setTimeout(() => {
				copyMessage.style.display = "none";
			}, 2000); // Hide the message after 2 seconds
		});
	</script>
		
        <script>
            const powerButton = document.getElementById("powerButton");
            let isOn = false;

               // Fetch the initial status from the server
    fetch('/get-status') // Create a Laravel route to retrieve the current status
        .then(response => response.json())
        .then(data => {
            isOn = data.status === 1;
            updateButtonState();
            console.log(data)
        })
        .catch(error => {
            console.error('Failed to retrieve status:', error);
        });
        
            powerButton.addEventListener("click", () => {
                isOn = !isOn;
                powerButton.classList.toggle("on", isOn);
                powerButton.querySelector(".power-button-text").textContent = isOn ? "ON" : "OFF";
        
                // Call the updateDatabaseStatus function to send the AJAX request
                updateDatabaseStatus(isOn);
            });

            function updateButtonState() {
            powerButton.classList.toggle("on", isOn);
            powerButton.querySelector(".power-button-text").textContent = isOn ? "ON" : "OFF";
    }
            function updateDatabaseStatus(isOn) {
                const status = isOn ? 1 : 0;
        
                // Send an AJAX request to the Laravel route
                fetch('/update-status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add the CSRF token
                    },
                    body: JSON.stringify({ status: status }),
                })
                .then(response => {
                if (response.ok) {
                    return response.json(); // Successful response
                } else {
                    throw new Error('Request failed with status: ' + response.status);
                }
                    })
                    .then(data => {
                        console.log(data.message);
                    })
                    .catch(error => {
                        console.error('Request failed:', error);
                    });
                        }
        </script>
        
	
</body>

</html>