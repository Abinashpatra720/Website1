<?php
require "conn.php";

if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	
	$address=$_POST['address'];

	$query="INSERT INTO user_info(name,email,address) VALUES('$name','$email','$address')";
	
	$result=mysqli_query($conn,$query);

	if($result)
		header("location:suggestion.php?name=$name&address=$address");
	else
		echo "Data could not be entered";
}

?>