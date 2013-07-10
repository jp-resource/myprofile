<?php

include "header.php";

?>
<?php

$con = mysqli_connect("localhost","root","1234","my_profile");

if(mysqli_connect_errno()){
	echo "Fail to connect MySql - ".mysqli_error();
}


if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM persons WHERE pid='$id'");

	echo "1 record Deleted";
}


 


mysqli_close($con);
?>

<a href="showdata.php" class="btn success">Show Data</a>
<?php
include "footer.php";
?>