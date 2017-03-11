<?php

include '../config.php';
date_default_timezone_set('Asia/Singapore');

$category = mysqli_real_escape_string($conn, $_GET['Category']);


$sql = "SELECT * FROM post WHERE post_category = '$category' ORDER BY post_id DESC";
$result = $conn->query($sql);

?>
<head>
	<link rel="stylesheet" href="css/style.css">
</head>

<div id="columns">

<?php
	if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
?>	
	<a href = "blog.php?id=<?php echo $row["post_id"]?>">
  	<figure>
  		<img src="../img/post/<?php echo $row["post_image"]?>">
		<figcaption><h3><?php echo $row["post_title"]?></h3></figcaption>
		<figcaption> <?php echo $row["post_description"]?></figcaption>
	</figure>
	</a>
<?php

}}

?>
		
  	<small>Stephanie - Android App &copy; <a href="#">Hey Daddy</a></small>
</div>