<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <li class="nav-item ">
                    <a class="nav-link" href="adminhome.php">Home</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="slots.php">Parking Slots</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="adminbookings.php">Bookings</a>
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

            <table class="table table-stripped table-bordered">
                <tr>
                <td>BookingId</td>
                <td>Email</td>
                    <td>Car Number</td>
                    <td>Price</td>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Hours</td>
                    <td>Amount</td>
                    <td>Status</td>
                </tr>
          

            <?php
            include 'config.php';
            session_start();
 
            $email=$_SESSION["email"];

            $sql = "SELECT * FROM booking";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    
                    <tr>
                    <td>" . $row["bid"]. "   </td>
                    <td>" . $row["email"]. "   </td>
                    <td>" . $row["carno"]. "   </td>
                    <td>" . $row["price"]. "   </td>
                    <td>" . $row["dat"]. "   </td>
                    <td>" . $row["time"]. "   </td>
                    <td>" . $row["hours"]. "   </td>
                    <td>" . $row["amount"]. "   </td>
                    <td>" . $row["status"]. "   
                    
                    <a href='reset.php?pid=" . $row["pid"]. "'><span class='glyphicon glyphicon-edit'></span></a>
                    </td>

                    </tr>
                    ";
                }
            } else {
                echo "No Records Found";
            }
            $conn->close();

            ?>



            </table>


        </div>



    </div>

</body>

</html>
