<?php 

include "../config.php";
date_default_timezone_set('Asia/Singapore');

$fullName = mysqli_real_escape_string($conn, $_GET['FullName']);
$email = mysqli_real_escape_string($conn,$_GET['Email']);
$message = mysqli_real_escape_string($conn,$_GET['Message']);


$to = "heydaddycares@gmail.com";
$subject = "[Contact] Hey Daddy - Mobile";
$msg =  "Hi admin,

$fullName had sent a message using contact us form. 

Email: $email
Message:

$message


This message is auto-generated. Please do not reply to this email.";


//echo $fullName." ".$message." ".$email;
mail($to,$subject,$msg);


//$query = "INSERT INTO customer (first_name, last_name, street_address, city, state, zip_code, email, phone_number, recorder_id) VALUES ('$FirstName', '$LastName', '$Street', '$City', '$State', '$Zip', '$Email', '$Phone', '$Recorder')";

//$result = mail($to,$subject,$msg) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

//mysqli_close($dbc); 

?>