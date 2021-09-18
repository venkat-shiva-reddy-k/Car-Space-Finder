<?php
include 'config.php';
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');

  \Stripe\Stripe::setApiKey('sk_test_51JYaOiJAXgEkdNxMxYCn2iTauGGq9duX7TE4uooJe9FK3uNmOtBLHB7LXJSHlf4QrlyMCKJlZSGe1h5Wyk17Rnry00IG3uTV5u');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $pid = $POST['aid'];
 $uemail = $POST['uemail'];
 $carno = $POST['carno'];
 $dat = $POST['dat'];
 $time = $POST['time'];
 $price = $POST['price'];
 $status = "Booked";
 $token = $POST['stripeToken'];

 $query = "SELECT * from booking where pid='$pid' and dat='$dat' and time='$time' ";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result);
 if(!$row)
 {
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $uemail,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $price *100,
  "currency" => "CAD",
  "description" => "booking charges",
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->id,
  'pid' => $pid,
  'email' => $uemail,
  'carno' => $carno,
  'dat' => $dat,
  'time' => $time,
  'price' => $price,
  'status' => $status
];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $pid,
  'amount' => $price,
  'currency' => "CAD",
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);
// echo "<script>alert('Successfully Booked');</script>";
// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


}else{

echo "<script>alert('Slot in not available Booking Unsuccessful');document.location='home.php'</script>";
}
?>
