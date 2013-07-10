<?php
error_reporting(0);
include "header.php";

$con = mysqli_connect("localhost","root","1234","my_profile");

if(mysqli_connect_errno()){
	echo "Fail to connect MySql - ".mysqli_error();
}

if($_POST['submit']=="Update")
{
	$update_qry = "UPDATE persons SET 
					FirstName='".$_POST['NFirstName']."', 
					LastName='".$_POST['NLastName']."', 
					Email='".$_POST['NEmail']."', 
					Mob='".$_POST['NMob']."', 
					Address='".$_POST['NAddress']."' 
				WHERE pid='".$_POST['pid']."'";

		$res = mysqli_query($con,$update_qry) or die($update_qry);
		echo "Updated Success";
		header("location:showdata.php");

}
if(isset($_GET['edit'])){

	$id = $_GET['edit'];
	//echo $id;echo "<hr>";
	$res = mysqli_query($con, "SELECT * FROM persons WHERE pid='$id'") or die(mysqli_error($con));
	//print_r($res);echo "<hr>";
	$row = mysqli_fetch_array($res);
  //  print_r($row);echo "<hr>";
	 
}

?>

<form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="post">
	<div class="control-group">
		<label class="control-label" for="FirstName">First Name</label>
		<div class="controls">
			<input type="text" name="NFirstName"  id="FirstName" value="<?php echo $row['FirstName']; ?>"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="LastName">Last Name</label>
		<div class="controls">
			<input type="text" name="NLastName"  id="LastName" value="<?php echo $row['LastName']; ?>"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Email">Email</label>
		<div class="controls">
			<input type="text" name="NEmail"  id="Email" value="<?php echo $row['Email']; ?>"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Mob">Mob</label>
		<div class="controls">
			<input type="text" name="NMob" id="Mob" value="<?php echo $row['Mob']; ?>"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Address">Address</label>
		<div class="controls">
			<input type="text" name="NAddress" id="Address" value="<?php echo $row['Address']; ?>">
			<input type="hidden" name="pid" value="<?php echo $id ; ?>" />

		</div>
	</div>
	<div class="control-group">
 		<div class="controls">
			<input type="submit" name="submit" id="submit" class="btn" value="Update">
			<a href="showdata.php" class="btn">Cancel</a>
			</div>
	</div>
 
</form>

<?php
include "footer.php";
?>