<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Car Parking Space Finder</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">



 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    background-color: white;
    margin: 10px;
    padding: 20px;
    border-radius: 20px;
}
</style>


</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" style="width:100%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item ">
                    <a class="nav-link" href="adminhome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="slots.php">Parking Slots</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="adminbookings.php">Bookings</a>
                </li>


                <li class="nav-item  ">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
      </ul>
    </div>
  </div>
</nav>

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
                   
                    <td>" . $row["status"]. "   
                    
                   
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
<footer style="margin-top:200px">
  
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy;Designed &amp; Developed by <a href="#">Car Parking Space Finder</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/script.js"></script>
</body>

</html>
