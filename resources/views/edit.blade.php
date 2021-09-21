<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>Document</title>

    <style>
        body {
     /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed; */
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #000000;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
    </style>
</head>
<body>
    <div class="container">
        <form class="form-horizontal" role="form" action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <h3 style="text-align: center; font-size: 34px; color: darkcyan;">Update Employee</h3>
            <div style="margin: 34px;"></div>
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label" style="color:white">First Name</label>
                <div class="col-sm-9">
                    <input type="text" name="firstname" placeholder="First Name" class="form-control" value="{{$data['firstname']}}" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label" style="color:white">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control" value="{{$data['lastname']}}" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label" style="color:white">Email </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email" value="{{$data['email']}}">
                </div>
            </div>
            <div class="form-group">
                <label for="number" class="col-sm-3 control-label" style="color:white">Phone Number</label>
                <div class="col-sm-9">
                    <input type="number" placeholder="Phone Number" class="form-control" name="phone" value="{{$data['phone']}}">
                </div>
            </div>
            <div class="form-group">
                <label for="CompanyName" class="col-sm-3 control-label" style="color:white">Company Name</label>
                <div class="col-sm-9">
                    <input type="text"  placeholder="Company Name" class="form-control" autofocus name="companyname" value="{{$data['companyname']}}">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label" style="color:white">Company Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Company Email" class="form-control" name="companyemail" value="{{$data['companyemail']}}">
                </div>
            </div>
            <div class="form-group">
                <label for="companylogo" class="col-sm-3 control-label" style="color:white">Company Logo</label>
                <div class="col-sm-9">
                    <input type="file" id="companylogo" name="companylogo" height="100" width="100" value="{{$data['companylogo']}}">
                </div>
            </div>
            <div class="form-group">
                <label for="website" class="col-sm-3 control-label" style="color:white">Company Website</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="website" class="form-control" name="companywebsite" autofocus value="{{$data['companywebsite']}}">
                </div>
            </div>
            
                        <button type="submit" class="btn btn-primary btn-block" name="submit" style="background-color: darkcyan">Update</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>
