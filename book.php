<?php
include "config.php";

session_start();

 $name = $_SESSION['email'];
// echo $name;

?>


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
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="mybookings.php">My Bookings</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="user_profile.php">Profile</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>


    <div class="container">

        <div class="row">

          


            <div class="col-md-6" style="margin-left:300px">
                <h2 style="text-align:center;color:white">Book slot</h2>
                <hr>

                <form action="bookdata.php" method="POST" name="submitform">

                    <div class="form-group">
                        <label style="color:white">ID</label>
                        <input class="form-control" type="text" name="aid" value="<?php $id = $_GET["id"];

                                                                                    echo $id; ?>" readonly>

                    </div>

                    <div class="form-group">
                        <label style="color:white">Email</label>
                        <input class="form-control" type="text" name="uemail" value="<?php echo $name; ?>" readonly>

                    </div>


                    <div class="form-group">
                        <label style="color:white">Car Number</label>
                        <input type="text" class="form-control" name="carno" required>
                    </div>

                    <div class="form-group">
                        <label style="color:white">Date</label>
                        <input id="txtDate" type="date" class="form-control" name="date" required>
                    </div>

                    <div class="form-group">
                        <label style="color:white">Time</label>
                        <!--<input type="time" class="form-control" name="time" required>-->
                        <select class="form-control" name="time">
                            <option>09:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>19:00</option>
                            <option>20:00</option>
                            <option>21:00</option>
                            <option>22:00</option>
                            <option>23:00</option>
                        </select>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label>Hours</label>-->
                    <!--    <input type="text" class="form-control amount" name="hrs" onkeyup="onkeyupsum()" required>-->
                    <!--</div>-->

                    <div class="form-group">
                        <label style="color:white">Price</label>
                        <input type="text" class="form-control amount" name="price"  value="<?php echo $_GET['price'] ?>" readonly required>
                    </div>

                  

                    <button class="btn btn-success form-control" type="submit">book </button>
                </form>

            </div>

          


        </div>



    </div>

    <script>
        // multiplicatiion function_______________________________________________________________________
        function onkeyupsum() { // calculate sum and show in textbox
            var multiply = 1,
                amount = document.querySelectorAll('.amount'),
                i;
            for (i = 0; i < amount.length; i++) {
                multiply *= parseFloat(amount[i].value || 1);
            }
            document.submitform.tamt.value = multiply;
        }



        // Date Function ___________________________________________________________________________________

        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var minDate = year + '-' + month + '-' + day;

            $('#txtDate').attr('min', minDate);
        });


        // document.getElementById("amount").value = hrs * price;
    </script>

</body>

</html>
