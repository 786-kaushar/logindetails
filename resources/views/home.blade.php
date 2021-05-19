<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body
        {
            padding:20px;
        }
    </style>
</head>
<body>
<div class="conatiner">
    <div class="row">
        <div class="col-lg-6 offset-3 my-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2> Welcome
            </div> <!-- end of card header -->
            <div class="card-body">
                <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Registration" onClick="registration()" /> 
                <input class="btn btn-primary" type="submit" value="Login" onClick="login()" /> 
                </div> 
            </div> <!-- end of card-body -->
        </div> <!-- end of card -->
            
        </div> <!-- end of column -->
    </div> <!-- end of row -->
</div> <!-- end of container -->
<script>
    function registration()
    {
        window.location.href="registrations";
    }
    function login()
    {
        window.location.href="login";
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>   
</body>
</html>