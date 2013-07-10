<?php

include "header.php";

?>
<?php
$con = mysqli_connect("localhost","root","1234","my_profile")

if(mysqli_connect_errno()){
	echo "Fali to connect DB".mysqli_error();
}

if(isset($POST['NFirstName'])){
	
} 


mysqli_close($con);
?>

<a href="showdata.php" class="btn success">Show Data</a>
<?php
include "footer.php";
?>