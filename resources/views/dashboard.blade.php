<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">

	<link rel="stylesheet" href="jquery.mCustomScrollbar.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================Offcanvus Menu Area =================-->
	<div class="side_menu">
		<a class="logo" href="#">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="list menu_right">
		<li>
			<a href="/allcandy">menu</a>
			</li>
			<li>
				<a href="/about">About</a>
			</li>
			<li>
				<a href="/myorder">shopping_cart</a>
			</li>
			
		</ul>
	</div>
	<!--================End Offcanvus Menu Area =================-->

	<!--================Header Menu Area =================-->
	<header class="header_area home_menu">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/logo-2.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
						<li>
			                   <a href="/dashboard">Home</a>
			                </li>
							<li>
								<a href="/about">About</a>
							</li>
							<li>
								<a href="/allcandy">Menu</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="book-table.html">Book a table</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="gallery.html">Gallery</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="elements.html">Elements</a>
									</li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="blog.html">Blog</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="single-blog.html">Blog Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Canvus Menu Area =================-->
	<div class="canvus_menu">
		<div class="container">
			<div class="float-right">
				<div class="toggle_icon">
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!--================End Canvus Menu Area =================-->

	<!--================ Start banner section =================-->
	<section class="home_banner relative">
		<div class="container-fluid pl-0">
			<div class="row justify-content-center align-items-center full_height">
				<div class="col-lg-6 p-0">
					<div class="banner_left d-flex justify-content-center flex-column">
						<h1>delicious cupcakes</h1>
						<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
							in the workplace. That’s why it’s crucial that, as women.
						</p>
						<a class="main_btn" href="/allcandy" >check our menu </a>
					</div>
					
				</div>
				<div class="col-lg-6">
					<div class="banner_right d-flex justify-content-center align-items-center">
						<div class="round-planet planet">
							<div class="round-planet planet2">
								<div class="round-planet planet3">
									<div class="shape shape1"></div>
									<div class="shape shape2"></div>
									<div class="shape shape3"></div>
									<div class="shape shape4"></div>
									<div class="shape shape5"></div>
									<div class="shape shape6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img class="face-img img-fluid" src="img/home-banner.png" alt="">
	</section>
	<!--================ End banner section =================-->

	<!--================ Top Dish Area =================-->
	
	<!--================ End footer Area  =================-->





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://www.gstatic.com/firebasejs/5.0.0/firebase.js"></script>
<script>
  
    var firebaseConfig = {
        apiKey: "AIzaSyD7hwZEZsT5l_L61TV-qz_blWOAG-fMeLw",
            authDomain: "test-project-b4d3b.firebaseapp.com",
            databaseURL: "https://itdemo-push-notification.firebaseio.com",
            projectId: "test-project-b4d3b",
            storageBucket: "test-project-b4d3b.appspot.com",
            messagingSenderId: "139290698662",
            appId: "1:139290698662:web:0bf07c7ff9375db35c2567",
            measurementId:  "G-P83HFPS69R"
    };
      
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
	
  
    function initFirebaseMessagingRegistration() {
		
            messaging
            .requestPermission()
            .then(function () {
				
                return( messaging.getToken());
            })
            .then(function(token) {
		
                console.log(token);
		
                $.ajaxSetup({
				
                    headers: {
						
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
				
                });
				
                $.ajax({
                    url: '{{ route("save") }}',
					
                    method: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.');
                    },
                    error: function (err) {
						alert('User Chat Token Error'+ err);
                        console.log('User Chat Token Error'+ err);
                    },
                });
				
            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
     }  
      
    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });</script>
    <script src="js/jquery-3.2.1.min.js"></script>

	
	<script src="js/theme.js"></script>
</body>

</html>
