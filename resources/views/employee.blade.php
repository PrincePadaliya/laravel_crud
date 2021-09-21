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
    background-color: #ebffcb;
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
        <form class="form-horizontal" role="form" action="{{ route('addimage') }}" method="POST">
            {{ csrf_field() }}
            <h3 style="text-align: center; font-size: 34px; color: rgb(76, 159, 192);">Employee Registration</h3>
            <div style="margin: 34px;"></div>
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="number" class="col-sm-3 control-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="number" placeholder="Phone Number" class="form-control" name="phone" required>
                </div>
            </div>
            <div class="form-group">
                <label for="CompanyName" class="col-sm-3 control-label">Company Name</label>
                <div class="col-sm-9">
                    <input type="text"  placeholder="Company Name" class="form-control" autofocus name="companyname" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Company Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Company Email" class="form-control" name="companyemail" required>
                </div>
            </div>
            <div class="form-group">
                <label for="companylogo" class="col-sm-3 control-label">Company Logo</label>
                <div class="col-sm-9">
                    <input type="file" id="companylogo" name="companylogo" height="100" width="100" required>
                </div>
            </div>
            <div class="form-group">
                <label for="website" class="col-sm-3 control-label">Company Website</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="website" class="form-control" name="companywebsite" autofocus required>
                </div>
            </div>
            
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>