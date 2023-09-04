@extends('layouts.app')
@section('content')  

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Food Bar</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
	
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">
	
	<link rel="stylesheet" href={{asset("css/style.css")}}>

</head>

<body>

	<!--================Offcanvus Menu Area =================-->
	
	<!--================End Offcanvus Menu Area =================-->

	<!--================Header Menu Area =================-->
	
	<section class="top_dish_area">
			
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title position-relative">
						<h1>
							Our delicious dishes</h1>
						<hr>
						<div class="round-planet planet">
							<div class="round-planet planet2">
								<div class="shape shape1"></div>
								<div class="shape shape2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
					@foreach ($types as $type)
				<div class="single_dish col-lg-4 col-md-6 text-center">
					<div class="thumb">
							<img style="width:300px"  src="\storage\product_images/{{ $type->image }}">
					</div>
					<h4>{{ $type->name }}</h4>
					<p>
							{{ $type->description}}
					</p>
					<h5 class="price">	{{ $type->price}}</h5>
				<a href="/orderto/{{$type->id}}">	<h5 class="price">	Add to shopping_cart</h5></a>
				</div>
				@endforeach
			</div>
			
			

				

			


</body>

</html>
 
@endsection