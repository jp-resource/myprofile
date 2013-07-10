<?php
$con=mysqli_connect("localhost","root","1234","my_profile");

//check connection

if(mysqli_connect_errno()){
	echo "Fail to connect MySql - ".mysqli_connect_error();
}

$sql = "CREATE TABLE persons(
		pid INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(pid),
		FirstName CHAR(40),
		LastName CHAR(40),
		Email VARCHAR(120),
		Mob INT,
		Address VARCHAR(120)
	)";

//execute query 
if(mysqli_query($con, $sql)){
	echo "Table Create Success";
}else{
	echo "Error creating table - ".mysqli_error($con);
}

?>