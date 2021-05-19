<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" type="text/css" /> 
    <style>
        .myimage 
        {
            height:150px !important;
            width:150px !important;
        }
    </style> 
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <p class=text-right>
                </p>
                <div class="text-danger">
                {{ isset($adminmessage) ? $adminmessage : "" }}
                </div>
                <div class="text-danger">
                {{ isset($message) ? $message : "" }}
                </div>
                <div class="text-right">
                 <a href="/" class='btn btn-warning'>home</a>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>SR No</th>
                                <th>Profile Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>details</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                                $count = 1;
                        @endphp
                        @foreach($user as $users)
                            <tr>
                                <td>{{$count++}}</td>
                                <td><img src="/images/registration/{{$users['photo']}}" class='img-thumbnail myimage'></td>
                                <td>{{$users['name']}}</td>
                                <td>{{$users['email']}}</td>
                                <td>{{$users['status']==0 ? "DeActivate" : "Activate"}}</td>
                                <td><a href="/user/edit/{{$users['id']}}/{{$id}}" class='btn btn-warning'>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
<script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    });
    </script>  
</body>
</html>