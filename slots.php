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
            <table class="table table-stripped table-bordered">
                <tr style="background-color:#337ab7;color:white">
                    <td>Park Id</td>
                    <td>Area Id</td>
                    <td>Parking Slot</td>
                    <td>Status</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>


                <?php
                include 'config.php';


                $sql = "SELECT * FROM parkingslots";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    
                    <tr>
                        <td>' . $row["pid"] . '   </td> 
                        <td>' . $row["aid"] . '   </td>
                        <td>' . $row["parkslot"] . '   </td>
                        <td>' . $row["status"] . '  </td>
                        <td>' . $row["price"] . '   </td>
                    <td> 
                    
                    <span data-toggle="modal" data-target="#' . $row["pid"] . '" class="glyphicon glyphicon-edit"></span>  
                    <a href="deleteparkingslot.php?id= ' . $row["pid"] . '"> <span class="glyphicon glyphicon-trash"></span> </a>
                    </td>
                   
                    </tr>



                    <div class="modal fade" id="' . $row["pid"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Add Area</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
    
                                <form method="post" action="editslot.php">

                                <input type="text" class="form-control" name="pid" value="' . $row["pid"] . '" hidden>


                                    <div class="form-group">
                                        <label>Enter State</label>
                                        <input type="text" class="form-control" name="parkslot" value="' . $row["parkslot"] . '" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label>Enter City</label>
                                        <input type="text" class="form-control" name="status" value="' . $row["status"] . '"  required>
                                    </div>
    
                                    <div class="form-group">
                                        <label>Enter Area</label>
                                        <input type="text" class="form-control" name="price" value="' . $row["price"] . '"  required>
                                    </div>
                                    <button class="btn btn-success form-control">Add Area</button>
                                </form>
    
    
                            </div>
                          
                        </div>
                    </div>
                </div>


                
                    ';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                ?>



            </table>

        </div>



    </div>

</body>

</html>
