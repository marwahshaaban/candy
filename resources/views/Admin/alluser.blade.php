@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>Email</th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>    </th>
        <th>Action</th>
    </tr>

    @foreach ($users as $user)
       <tr>
        <td>{{ $user->name}}</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>{{ $user->email }}</td>  
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        <td> 
            <a class="btn btn-primary" href="/admin/deleteuser/{{$user->id}}">delete </a>
      
         </td>
       
    </tr> 
    @endforeach
</table>

@endsection