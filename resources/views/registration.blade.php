<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body
        {
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-6 offset-3 my-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3>Registartion Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="registrations" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                            <div class="form-group">
                                {{$errors->first('name')}}
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('name')==true)
                                            echo $errors->first('name');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"  value="{{old('email')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('email')==true)
                                            echo $errors->first('email');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" id="phone" class="form-control" value="{{old('phone')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('phone')==true)
                                            echo $errors->first('phone');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{old('country')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('country')==true)
                                            echo $errors->first('country');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" value="{{old('state')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('state')==true)
                                            echo $errors->first('state');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('city')==true)
                                            echo $errors->first('city');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" name="pincode" id="pincode" class="form-control" value="{{old('pincode')}}" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('pincode')==true)
                                            echo $errors->first('pincode');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photo">Upload photo</label>
                                <input type="file" name="photo" id="photo" class="form-control" accept="image/*" required>
                                <div class="text-danger">
                                    @php 
                                        if($errors->has('photo')==true)
                                            echo $errors->first('photo');
                                    @endphp
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="usertype">Select user type</label>
                                <select class="custom-select" id="usertype" name="usertype">
                                    <option value="1">admin login</option>
                                    <option value="2" selected>user login</option>
                                </select>
                            </div>
                            
                            <div class="form-group text-right">
                             <input class="btn btn-primary" type="submit" value="Save details" /> 
                            </div>
                            <div class="form-group text-info text-center">
                                {{ isset($message) ? $message : "" }}
                            </div>
                        </form>
                    </div> <!-- end of card-body -->
                </div> <!-- end of card -->
            </div> <!-- end of column -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>   
</body>
</html>