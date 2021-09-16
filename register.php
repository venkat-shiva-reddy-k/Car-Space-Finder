 <?php
    include 'config.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
     $qus = $_POST['qus'];
    $answer = $_POST['answer'];

//     $sql = "INSERT INTO user (name, email, phone, pass, qus, answer)
// VALUES ('$fname', '$email', '$phone', '$pass', '$qus', '$answer')";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//         header('Location:sign-in.html');
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();

$query = "SELECT * from user where email='$email';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
$query1="insert into user(name, email, phone, pass, qus, answer) values('$fname', '$email', '$phone', '$pass', '$qus', '$answer');";

$retval = mysqli_query($conn,$query1);

echo "<script>alert('User registered Successfully please login.');document.location='sign-in.html'</script>";
}else{

   echo "<script>alert('User Id exists. Please use different email Id');document.location='sign-up.html'</script>";
}

    ?>
