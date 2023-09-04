
@extends('layouts.app')
@section('content')  
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   
    <link rel="stylesheet" href="css/stylee.css" type="text/css">
</head>

<body>
  
    <!-- Breadcrumb End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th> Product </th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th> </th>
                                </tr>
                            </thead>
                            @foreach ($orders as $order)
                            <tbody>
                                 
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img width="100px" src="{{ asset('img\\'.$order->image) }}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$order->name}}</h6>
                                           
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                {{$order->size}}
                                            </div>
                                        </div>
                                    </td>
                                    <td> {{$order->total}}  </td>
                                    <td> <a class="btn btn-primary" href="order.edit/{{$order->id}}">UPDATE </a> </td>
                                    <td> <a class="btn btn-primary" href="order.destroy/{{$order->id}}">Delete</a></td>
                                </tr>
                             
                            </tbody>
                            @endforeach
                        </table>
                        <center> <a class="btn btn-primary" href="pay/{{$all}} ">buy </a> </center>
                    </div>
                   
                </div>
               
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    


</html>
@endsection

