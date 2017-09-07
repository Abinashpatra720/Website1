<html>
<head>
<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<style>
h1{
	font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>
<div class="container">

<?php

require "conn.php";

if(isset($_GET['address'])){
	$name=$_GET['name'];
	$address=$_GET['address'];
	$query="SELECT * FROM user_info WHERE address='$address' AND name!='$name'";
	$result=mysqli_query($conn,$query);
	$num_rows=mysqli_num_rows($result);
		if(!$num_rows){
		echo"<h1 class='mt-3'>Could not find any match based on your location</h1>";
	}else{
		$i=0;
		echo"<h1 class='mt-3'>Found the following matches</h1>";
		echo"<table class='table'>";
		echo"<thead>";
		echo"<tr>";
		echo"<th>#</th>";
		echo"<th>Name</th>";
		echo"<th>Address</th>";
		echo"</tr>";
		echo"</thead>";
		while($row=mysqli_fetch_assoc($result)){
			$i+=1;
			echo"<tr>";
			echo"<td>".$i."</td>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['address']."</td>";
			echo"</tr>";
		}
		echo"</table>";
	}
}
?>

</div>
</body>
</html>