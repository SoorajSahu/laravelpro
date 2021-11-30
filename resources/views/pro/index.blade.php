@extends('layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark">
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="https://seeklogo.com/images/L/laravel-logo-41EC1D4C3F-seeklogo.com.png" alt="" width="60" height="50" class="d-inline-block align-text-top">
                <span class= "text-white">Laravel </span>
                </a>
            </div>
        </nav>
        <form class="d-flex">
            <div class="navbar-nav">
                @if (Auth::user())
                        
                <a class="nav-link active text-white " aria-current="page" href="{{url('logout')}}">  <i class="fas fa-door"></i>logout</a>
                @else
                <a class="nav-link active text-white " aria-current="page" href="{{url('signup')}}">  <i class="fas fa-user"></i>Signup</a>
                <a class="nav-link active text-white " aria-current="page" href="{{url('signin')}}"><i class="fas fa-user"></i>Signin</a>
                    
                @endif
            </div>
        </form>
    </div>
</nav>
<div class="container">
            <div class="shadow bg-body rounded p-5 m-5" >
                <h5><b>Home Page </b></h5>
                 {{-- <form action="{{url('signin')}}" method="POST">  
                    @csrf  
                  

                    
                        <div class="mb-3">       
                            <label for="email" class="form-label">Email</label>
                        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">email@example.com</span>
                                <input type="text" class="form-control" name="email" placeholder="" aria-label="Email" aria-describedby="basic-addon1" required>
                            </div>
                            <span id="email" class="form-text">
                                You can use letters,numbers & periods
                            </span>
                        </div>
               
               
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="" min="1" max="8" required>
                            <span id="password" class="form-text">
                                Use 8 or more characters with a mix of letters,numbers & symbols
                            </span>
                        </div>      
               
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Remember me
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>         --}}
            </div>
</div>     
@endsection