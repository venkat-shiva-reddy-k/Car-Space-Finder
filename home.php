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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <a class="navbar-brand" href="#">Online Parking System</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="mybookings.php">My Bookings</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="user_profile.php">My Profile</a>
                </li>

                <li class="nav-item  ">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>

    <div class="container">

        <div class="row">

          
               <?php
            include 'config.php';


            $sql = "SELECT * FROM area";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '

                    <div class="col-md-3 bg">

                        <form method="POST" action="parkingslots.php?id=' . $row["aid"] . '">
                            <p>
                           ' . $row["state"] . '
                            
                            </p>
                            <p>
                          ' . $row["city"] . '
                             </p>
                              <p>
                            ' . $row["area"] . '
                            <br>
                            <br>
                             <button class="btn btn-success form-control" type="submit"> Check Slots </button> 
                        </form>
                    </div>
                    
                    ';
                }
            } else {
                echo "0 results";
            }
            $conn->close();

            ?>






        </div>



    </div>

</body>

</html>
