@extends('layouts.app')
@section('content')



<br>
<br>
<br>

<div class="container-fluid">

        <div class="row align-items-center py-3 px-xl-5 cm-sm-10">

            <div class="col-lg-6 col-6 text-left cm-sm-10">
                <form action="{{ route('web.find') }}" method="GET">
                    @csrf
                    <div class="input-group">
                    <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                 
                        <div class="input-group-append">

                            <button type="submit" class="input-group-text bg-transparent text-primary" > search</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
             <br>
             <hr>
             <br>
             @if(isset($products))

               <table class="table table-bordered table-hover">
        <tr>
        <th>Name</th>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
        <th>Description</th>
        <th> </th>
<th> </th>
<th> </th>
<th> </th>
        <th>Price</th>
        <th> </th>
<th> </th>
<th> </th>
<th> </th>
        <th>Image</th>
        <th> </th>
<th> </th>
<th> </th>
<th> </th>
        <th>Actions </th>

        </tr>
                 
                       @if(count($products) > 0)
                       @foreach ($products as $product)
       <tr>
        <td>{{ $product->name}}</td>
<td></td>
<td></td>
<td></td>
<td></td>
        <td>{{ $product->description }}</td>
        <td></td>
<td></td>
<td></td>
<td></td>
        <td>{{ $product->price }} </td>
        <td></td>
<td></td>
<td></td>
<td></td>
        <td> <img style="width:100px" src="\storage\product_images/{{ $product->image }}"> </td>
        
        <td></td>
<td></td>
<td></td>
<td></td>
        <td>
            <a class="btn btn-success" href="/admin/editproduct/{{$product->id}}"> Update</a>
            <a class="btn btn-primary" href="/admin/deleteproduct/{{$product->id}}" >Delete</a>
         </td>

    </tr>
    @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   
               </table>

               <div class="pagination justify-content-center">
                   <?php  ?>
                   {{  $products->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>

</body>
</html>
@endsection
