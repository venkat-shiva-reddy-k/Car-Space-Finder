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
                <li class="nav-item active">
                    <a class="nav-link" href="adminhome.php">Home</a>
                </li>
                <li class="nav-item  ">
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

         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcity">+ Area</button>



            <!-- Modal -->
            <div class="modal fade" id="addcity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Add Area</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="addarea.php">
                                <div class="form-group">
                                    <label>Enter State</label>
                                    <input type="text" class="form-control" name="astate" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter City</label>
                                    <input type="text" class="form-control" name="acity" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Area</label>
                                    <input type="text" class="form-control" name="aplace" required>
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
                    <td>Area Id</td>
                    <td>State</td>
                    <td>City</td>
                    <td>Area</td>
                    <td>Action</td>
                </tr>


                <?php
                include 'config.php';


                $sql = "SELECT * FROM area";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    
                    <tr>
                    <td>' . $row["aid"] . '   </td>
                    <td>' . $row["state"] . '   </td>
                    <td>' . $row["city"] . '   </td>
                    <td>' . $row["area"] . '   </td>
                    <td>   
                      <span data-toggle="modal" data-target="#' . $row["aid"] . '" class="glyphicon glyphicon-edit"></span>  
                   <a href="deletearea.php?id= ' . $row["aid"] . '"> <span class="glyphicon glyphicon-trash"></span> </a>
                    </td>
                   
                    </tr>


                    <div class="modal fade" id="' . $row["aid"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Add Area</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
    
                                <form method="post" action="editarea.php">

                                <input type="text" class="form-control" name="aid" value="' . $row["aid"] . '" hidden>


                                    <div class="form-group">
                                        <label>Enter State</label>
                                        <input type="text" class="form-control" name="estate" value="' . $row["state"] . '" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label>Enter City</label>
                                        <input type="text" class="form-control" name="ecity" value="' . $row["city"] . '"  required>
                                    </div>
    
                                    <div class="form-group">
                                        <label>Enter Area</label>
                                        <input type="text" class="form-control" name="earea" value="' . $row["area"] . '"  required>
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
