<?php 

include "../config.php";
date_default_timezone_set('Asia/Singapore');

$fullName = mysqli_real_escape_string($conn, $_GET['FullName']);
$email = mysqli_real_escape_string($conn,$_GET['Email']);
$firstTimeParent = mysqli_real_escape_string($conn,$_GET['FirstTimeParent']);
$childAgeRange = mysqli_real_escape_string($conn,$_GET['ChildAgeRange']);
$doubleIncome = mysqli_real_escape_string($conn,$_GET['DoubleIncome']);
$interest = mysqli_real_escape_string($conn,$_GET['Interest']);


$query = "INSERT INTO member (member_name, member_email, member_double_income, member_first_time_parent, member_child_age, member_interest, member_registration_date) VALUES ('$fullName', '$email', '$doubleIncome', '$firstTimeParent', '$childAgeRange', '$interest', now())";

$result = mysqli_query($conn, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));

mysqli_close($dbc);


?>