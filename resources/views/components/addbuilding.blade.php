<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>ADD BUILDING</title>
    
    <!-- Icons font CSS-->
    <link href="{{asset('assets/AddBuilding/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/AddBuilding/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/AddBuilding/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/AddBuilding/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="{{asset('assets/AddBuilding/css/main.css')}}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
              
                <div class="card-heading">
                    <h2 class="title">Building Add Form</h2>
                </div>
               
                <div class="card-body">
                    <form  method="POST" action="{{url('building/datastore')}}">
                        @csrf
                       
                        <div class="form-group">
                          <label for="exampleInputEmail1">Building Name</label>
                          <input type="text" name="building_name" class="form-control @error('building_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Building  Name">
                          @error('building_name')
                              <strong class="text-danger"> {{$message}} </strong>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Building Number</label>
                            <input type="text" name="building_number" class="form-control @error('building_number') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Building number">
                            @error('building_number')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Owner Name</label>
                            <input type="text" name="owner_name" class="form-control @error('owner_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Building  Name">
                            @error('owner_name')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                          </div>
  
                          <div class="form-group">
                              <label for="exampleInputEmail1">Owner Number</label>
                              <input type="text" name="owner_number" class="form-control @error('owner_number') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Owner Number">
                              @error('owner_number')
                              <strong class="text-danger"> {{$message}} </strong>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Numbers of Floor </label>
                            <input type="text" name="no_of_floors" class="form-control @error('no_of_floors') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numbers of Floor">
                            @error('no_of_floors')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Numbers of Unit </label>
                            <input type="text" name="no_of_units" class="form-control @error('no_of_units') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numbers of Unit">
                            @error('no_of_units')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Unit Details </label>
                            <input type="text" name="unit_details" class="form-control @error('unit_details') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Details">
                            @error('unit_details')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
                            @error('address')
                            <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                        </div>


                        <button class="btn btn--radius-2 btn--red" type="submit">SUBMIT</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->

    <script src="{{asset('assets/AddBuilding/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('assets/AddBuilding/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/AddBuilding/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/AddBuilding/vendor/datepicker/daterangepicker.js')}}"></script>

  
    <script src="js/global.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<!-- end document-->