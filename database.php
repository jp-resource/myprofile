<?php

$con = mysqli_connect("localhost", "root", "1234");

if(mysqli_connect_error()){

	echo "Failed to connect DB".mysqli_connect_error();
}

//create Database

$sql = "CREATE DATABASE my_profile";

if(mysqli_query($con, $sql)){
	echo "DB Success";	
}else{
	echo "Error in Database".mysqli_error();
}

?>