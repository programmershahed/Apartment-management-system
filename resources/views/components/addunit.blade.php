<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
        
            <div class="col-md-8 mt-5 ">
                <h1 class="text-center">UNIT ADD</h1>
                <form  method="POST" action="{{url('unit/datastore')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Builidng Section</label>
                      <input type="text" class="form-control" name="build_section" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Builidng Section">
                      @error('build_section')
                              <strong class="text-danger"> {{$message}} </strong>
                          @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Floor Number</label>
                        <input type="text" class="form-control"  name="floor_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Floor Number">
                        @error('floor_no')
                         <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit</label>
                        <input type="text" class="form-control"  name="unit" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit">
                        @error('unit')
                        <strong class="text-danger"> {{$message}} </strong>
                       @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit Number</label>
                        <input type="text" class="form-control"   name="unit_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Number">
                        @error('unit_number')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit Types</label>
                        <input type="text" class="form-control"   name="unit_types" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Types">
                        @error('unit_types')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Bathroom No</label>
                        <input type="text" class="form-control"   name="no_bathroom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bathroom No">
                        @error('no_bathroom')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">BadRoom No</label>
                        <input type="text" class="form-control"   name="no_badroom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BadRoom No">
                        @error('no_badroom')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Yearly Market Rental</label>
                        <input type="text" class="form-control"   name="yearly_market_rental" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Yearly Market Rental">
                        @error('yearly_market_rental')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Deposit</label>
                        <input type="text" class="form-control"   name="deposit" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deposit">
                        @error('deposit')
                        <strong class="text-danger"> {{$message}} </strong>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary mb-5">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   

  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>