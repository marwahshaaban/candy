
@extends('layouts.app')
@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header"> <br>
                    <center>
                  <h2>  Please add your product <h2></center></div>
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    <form   method="POST" action="{{ route('send.notification') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <h5 class="text-left">Name :</h5>
                        <input class="form-control" type="text" name="name" >
                        @error('name')
        <h6>{{$message}}</h6>
            @enderror
                        </div>
      
                      <div class="form-group">
        <h5 class="text-left">description :</h5>
        <input class="form-control" type="text" name="description" >
        @error('description')
        <h6>{{$message}}</h6>
            @enderror
        </div>
        <div class="form-group">
        <h5 class="text-left">size :</h5>
        <input class="form-control" type="number" name="size" >
        @error('size')
        <h6>{{$message}}</h6>
            @enderror
        </div>
       <div class="form-group">
        <h5 class="text-left">price :</h5>
        <input class="form-control" type="text" name="price" >
        @error('price')
        <h6>{{$message}}</h6>
            @enderror
        </div>
     
         <div class="form-group">
        <h5 class="text-left">Image :</h5>
        <input class="form-control" type="file" name="image" ><br>
       </div>
       <br>
        <br>
       <div class="form-group">
                        <button type="submit"  class="btn btn-primary" >OK</button>
                        </div>

                    </form>
              
                </div>
            </div>
        </div>
    </div>
</div>

  
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
      
    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });
   
</script>
@endsection