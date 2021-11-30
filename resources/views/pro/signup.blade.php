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
                        <h5><b> Create you Signup Account </b></h5>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{url('signup')}}" method="POST">  
                            @csrf  
                            <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="middlename" class="form-label">Middlename</label>
                                    <input type="text" class="form-control" name="middlename" placeholder="" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="dob" class="form-label">DOB</label>
                            <input type="date" class="form-control" name="dob" placeholder="" required>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                            <label class="form-check-label" for="inlineRadio1"> Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                            <label class="form-check-label" for="inlineRadio2"> Female</label>
                        </div>
                                                    
                        <div class="mb-3">       
                            <label for="email" class="form-label">Email</label>
                           
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">email@example.com</span>
                                <input type="text" class="form-control" name= "email" placeholder="" aria-label="Email" aria-describedby="basic-addon1" reuired>
                            </div>
                             <span id="email" class="form-text">
                                You can use letters,numbers & periods
                            </span>
                        </div>
                       
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="mobile" class="form-control" name="mobile" placeholder="" required>
                        </div> 

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="" required>
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
                    </div>
                </form>    
        </div>               

        @endsection