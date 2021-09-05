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
                <li class="nav-item  active">
                    <a class="nav-link" href="slots.php">Parking Slots</a>
                </li>
                <li class="nav-item  ">
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
           
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addslot">+ Parking Slot</button>


            <!-- Modal -->
            <div class="modal fade" id="addslot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Add Area</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="addparking.php">
                                <div class="form-group">
                                    <label>Select Area </label>
                                    <select class="form-control" name="parea" required>
                                        <?php
                                        include'config.php';

                                        $sql = "SELECT * FROM area";
                                        $result = $conn->query($sql);
                        
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo '
                                            
                                                <option value="' . $row["aid"] . '">' . $row["area"] . '</option>
                        
                                        
                                            ';
                                            }
                                        } else {
                                            echo "No Data Found";
                                        }
                                        $conn->close();


                                        ?>

                                        <!-- 
                                        <option value="2">Labbipet</option>
                                        <option value="4">Krishna Lanka</option> -->
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Enter Parking Slot</label>
                                    <input type="text" class="form-control" name="pslot" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Price</label>
                                    <input type="text" class="form-control" name="pprice" required>
                                </div>
                                <button class="btn btn-success form-control">Add Area</button>
                            </form>


                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>



    </div>

</body>

</html>
