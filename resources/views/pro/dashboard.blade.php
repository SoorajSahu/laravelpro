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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Documentation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">Forge</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ecosystem
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Updates</a>
                    </li>
                     <li class="nav-item">
                    <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Partners</a>
                    </li>
                </ul>
               
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
        <!---------------------------------------- Body Sesion ----------------------------------------------->
        <div class="container">
                    <div class="shadow bg-body rounded p-5 m-5" >
                       
                        <h5><b> Welcome to dashboard {{Auth()->user()->firstname}}</b></h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Add new user
                          </button>
                          <button type="button" class="btn btn-primary" onclick="allData()">
                            Reload
                           </button>
                          
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">email</th>
                              </tr>
                            </thead>
                            <tbody id="users">


                            </tbody>
                          </table>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" id="close" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form  method="POST" action="{{ route('register_new')}}" >  
                                             
                                            <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="firstname" class="form-label">Firstname</label>
                                                    <input type="text" class="form-control" name="firstname" placeholder="" required>
                                                </div>
                                            </div>
                                            {{csrf_field()}}
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
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function allData(){
                    $.get("{{url('/allusers')}}",(data)=>{
                         $('#users').html(data)
                    });
                }
            $(document).ready(function () {
                allData();

                $("form").submit(function (event) {
                    event.preventDefault();
                    
                    var url = event.target.action  // get the target
                    var formData = $(this).serialize() // get form data
                    $.post(url, formData, function (response) { 
                       JSON.parse(response);
                        alert(JSON.parse(response).message)
                        $('form').find('input').val('');
                        $('#close').click();
                        allData();
                    })
                    
                });
                });
        </script>
@endsection


 