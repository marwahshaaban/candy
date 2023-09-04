@extends('layouts.app')
@section('content') 
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href={{asset("css/bootstrap.css")}}>

		<link rel="stylesheet" href={{asset("css/vendors/owl-carousel/owl.carousel.min.css")}}>
	
		<link rel="stylesheet" href={{asset("css/vendors/nice-select/css/nice-select.css")}}>
		
		<!-- main css -->
		<link rel="stylesheet" href={{asset("css/style.css")}}>

</head>

<body>

 
	<!--================End Banner Area =================-->

	<!--================Book Table Area =================-->
	<section class="book_table_area section_gap">
		<div class="container">
			<div class="book_table_inner row">
				<div class="col-lg-5">
					<div class="table_img">
						<img style="width:400px" src="{{ asset('img\\'.$can->image) }}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="table_form">
						<h3>Enter the quantity you want:</h3>
						
						<form action="/order" method="POST">
							@csrf 
							<input name="can_id" value="{{$can->id}}" hidden>
          
							<h5 class="text-left">Size :</h5>
							<input class="form-control" type="text" name="size" placeholder="Enter here" >
							<div class="form-group col-md-12">
								
								<input class="btn btn-success" type="submit" value="Order" > 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Book Table Area =================-->

	<!--================ start footer Area  =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	

</body>

</html>
@endsection