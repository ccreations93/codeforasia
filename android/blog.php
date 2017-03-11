<?php

include '../config.php';
date_default_timezone_set('Asia/Singapore');


$page_id = (isset($_GET['id']) ? $_GET['id'] : null);
$sql1 = "SELECT * FROM post WHERE post_id='$page_id'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

//Format Date
$formatDate=explode("-",$row1["post_date"]);
$date=$formatDate[2];
$month=$formatDate[1];
$year=$formatDate[0];

$monthName = date("F", mktime(0, 0, 0, $month, 10));
$post_date = $monthName." ".$date.",".$year;

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hey Daddy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="one-stop resources on child-caring for dads">
		<meta name="author" content="Stephanie">
		<meta name="robots" content="index, follow">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="css/blog.css">

		
	</head>
	<body>
		<div class="content">
			<div class="container">
				<div class="main">

					<h2><?php echo $row1["post_title"]; ?></a></h2>

					<p>Posted by <b><?php echo $row1["post_author"];?></b> on <b><?php echo $post_date; ?></b>

					<hr>
					
				<p><img class="img-responsive" src="../img/post/<?php echo $row1['post_image']?>" alt=""></p>

					<p><?php echo $row1["post_content"];?></p>
					
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				&copy; Hey Daddy 2015. All Rights Reserved.
			</div>
		</div>
	</body>
</html>
