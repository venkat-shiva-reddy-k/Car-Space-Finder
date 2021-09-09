 <?php
    include 'config.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO user (name, email, phone, pass)
VALUES ('$fname', '$email', '$phone', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location:sign-in.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


    ?>
