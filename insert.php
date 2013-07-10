<?php
include "header.php";

?>
<?php

$con = mysqli_connect("localhost","root","1234","my_profile");

if(mysqli_connect_errno()){
	echo "Fail to connect MySql - ".mysqli_error();
}

$sql = "INSERT INTO persons(FirstName,LastName,Email,Mob,Address) VALUES('$_POST[FirstName]','$_POST[LastName]','$_POST[Email]','$_POST[Mob]','$_POST[Address]')";

if(!mysqli_query($con,$sql)){

	die('Error:-  '.mysqli_error($con));
}

echo "1 record Updated";

mysqli_close($con);
?>

<a href="showdata.php" class="btn success">Show Data</a>
<?php
include "footer.php";
?>