<?php
require 'conn.php';
if(isset($_GET['name']) && $_GET['name']!=""){
	$hint="";
	$name=$_GET['name'];
	$name=strtolower($name);
	$len=strlen($name);
	$query="SELECT name FROM user_info";
	$result=mysqli_query($conn,$query);
	$num_rows=mysqli_num_rows($result);
	if($num_rows){
		while($row=mysqli_fetch_assoc($result)){
			foreach($row as $a){
				if(stristr($name,substr($a,0,$len))){
					if($hint=="")
						$hint=$a;
					else
						$hint.=", ".$a;
				}
		}
	}


		}
		if($hint=="")
			echo"Found no match";
		else
			echo $hint;
}

if(isset($_GET['address']) && $_GET['address']!=""){
	$hint="";
	$address=$_GET['address'];
	$address=strtolower($address);
	$len=strlen($address);
	$query="SELECT address FROM user_info";
	$result=mysqli_query($conn,$query);
	$num_rows=mysqli_num_rows($result);
	if($num_rows){
		while($row=mysqli_fetch_assoc($result)){
			foreach($row as $a){
				if(stristr($address,substr($a,0,$len))){
					if($hint=="")
						$hint=$a;
					else
						$hint.=", ".$a;
				}
		}
	}


		}
		if($hint=="")
			echo"Found no match";
		else
			echo $hint;
}
?>