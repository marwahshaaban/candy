
@extends('layouts.app')
@section('content') 
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Book A Table</title>
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
						<img style="width:400px" src="{{ asset('img\\'.$order->image) }}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="table_form">
						<h3>UPDATE Your Order</h3>
						
                        <form action="/updateorder" method="POST">
                            @csrf 
							<div class="form-group col-md-12">
                                    <input name="id" value="{{$order->id}}" hidden>
                                <h5 class="text-left">Name :</h5>
                                <input class="form-control" type="text" name="name" value="{{$order->name}}" > 
                            </div>
                            <div class="form-group col-md-12">
                                <h5 class="text-left">number :</h5>
                              
							</div>
							<input class="form-control" type="text" name="size" value="{{$order->size}}" > 
                                <input class="btn btn-success" type="submit" value="UPDATE" >
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	

</body>

</html>
@endsection


