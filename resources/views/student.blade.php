<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
    @include("navbar")

    
      <div class="header text-center">
        <h1>Student Managment System</h1>
      </div>
    

    @if($layout == 'index')
     <div class="container-fluid mt-4">
         <div class="container-fluid mt-4">
           <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
           </div>
           </div>
     </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                  <div class="card mb-3">
                    <img class="card-img-top" height="400px"src="https://images.pexels.com/photos/5212338/pexels-photo-5212338.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Enter The Information About the Student</h5>
                      <form action="{{ url('/store') }}" method="post">
                        @csrf
                     <div class="form-group">
                       <label>Cne</label>
                       <input  name="cne" type="text" class="form-control"  placeholder="Enter Cne">
                     </div>
                     <div class="form-group">
                         <label>First Name</label>
                         <input  name="firstName" type="text" class="form-control"  placeholder="Enter firstName">
                       </div>
                       <div class="form-group">
                         <label>Last Name</label>
                         <input  name="lastName" type="text" class="form-control"  placeholder="Enter Last Name">
                       </div>
                       <div class="form-group">
                       <label>Age</label>
                       <input  name="age" type="int" class="form-control"  placeholder="Enter Age">
                     </div>
                     <div class="form-group">
                         <label>Specility</label>
                         <input  name="speciality" type="text" class="form-control"  placeholder="Enter ">
                       
                       </div>

                       <input type="submit" class="btn btn-info" value="Save">
                       <input type="reset" class="btn btn-warning" value="Reset">
                   </form>
             </section>
         </div>
 </div>

                    </div>
                  </div>
                   
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col">
                </section>
            </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                  <div class="card mb-3">
                    <img class="card-img-top" src="https://images.pexels.com/photos/4866043/pexels-photo-4866043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Update Information of Student</h5>
                      <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                  <div class="form-group">
                      <label>CNE</label>
                      <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                  </div>
                  <div class="form-group">
                      <label>First Name</label>
                      <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                  </div>
                  <div class="form-group">
                      <label>Last Name</label>
                      <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control"  placeholder="Enter second name">
                  </div>
                  <div class="form-group">
                      <label>Age</label>
                      <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                  </div>
                  <div class="form-group">
                      <label>Speciality</label>
                      <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                  </div>
                  <input type="submit" class="btn btn-info" value="Update">
                  <input type="reset" class="btn btn-warning" value="Reset">

              </form>

                    </div>
                  </div>

                  
                </section>
            </div>
    </div>
    @endif
    <footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>