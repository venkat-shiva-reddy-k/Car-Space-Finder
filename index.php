<!DOCTYPE html>
<html lang="en">

<head>
      <title>Car Parking Space Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .bg {
            background-color: #f0f0f0;
            margin: 10px;
            padding: 10px;
            border-radius: 20px;
        }

     
h2{
    top:50%;
}
        
    </style>
</head>

<body style="background-color:aliceblue">

    <div class="container card" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-6" style="padding:0px;">
                <img src="images/login.jpg" alt="parking" style="width:100%;border-radius:20px;">
            </div>
            <div class="col-md-6" style="padding:60px;">

               
                    <h2 style="margin-top:50px;text-align:center">User Login</h2>
                    <hr>

                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="uname" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>

                        <button class="btn btn-success " type="submit">Login</button>
                        <a href="register.html" style="text-align:right">Register Here</a>
                    </form>

                    <a href="adminlogin.html" style="text-align:right">Admin</a>
                
                 
            </div>
        </div>
    </div>





</body>

</html>