<?php
include "config.php";

session_start();

 $name = $_SESSION['email'];
// echo $name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

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

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

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
                <form action="charge.php" method="post" id="payment-form">
                 
       


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
                        <!--<input type="text" class="form-control" name="carno" required>-->
                        
                        <select class="form-control" name="carno">
                            <?php
                            
                             include 'config.php';
               // session_start();

                $email = $_SESSION["email"];

                $sql = "SELECT * FROM car where email='$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    
                  
                  
                    <option>' . $row["carno"] . '   </option>
                   
                
                
                    ';
                    }
                } else {
                    echo "No Cars Found please add car";
                }
                $conn->close();


                            
                            ?>
                        </select>
                        
                        
                        
                        
                        
                    </div>

                    <div class="form-group">
                        <label style="color:white">Date</label>
                        <input id="dat" type="date" class="form-control" name="dat" required>
                        <!--<div class='input-group date' id='date' name="date">-->
                        <!--        <input type='text' class="form-control" />-->
                        <!--        <span class="input-group-addon">-->
                        <!--            <span class="glyphicon glyphicon-calendar"></span>-->
                        <!--         </span>-->
                        <!-- </div>-->
                        
                        
                        
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

                    <div class="form-group">
                        <label style="color:white">Price</label>
                        <input type="text" class="form-control amount" name="price"  value="<?php echo $_GET['price'] ?>" readonly required>
                    </div>

                  

       
                    <div id="card-element" class="form-control">
                      <!-- a Stripe Element will be inserted here. -->
                      
                    </div>

        <!-- Used to display form errors -->
                     <div id="card-errors" role="alert"></div>
     

      <button>Submit Payment</button>
    </form>
            </div>
            </div>
            
            </div>
            
            </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>
  
  
  </script>

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
        
        
          $(function () {
        $('#dat').datetimepicker({
            minDate:new Date()
        });
    });

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

            $('#dat').attr('min', minDate);
        });


        // document.getElementById("amount").value = hrs * price;
    </script>
</body>
</html>
