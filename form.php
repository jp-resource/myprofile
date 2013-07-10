<?php
include "header.php";

?>

<form class="form-horizontal" action="insert.php" method="post">
	<div class="control-group">
		<label class="control-label" for="FirstName">First Name</label>
		<div class="controls">
			<input type="text" name="FirstName"  id="FirstName" placeholder="FirstName"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="LastName">Last Name</label>
		<div class="controls">
			<input type="text" name="LastName"  id="LastName" placeholder="LastName"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Email">Email</label>
		<div class="controls">
			<input type="text" name="Email"  id="Email" placeholder="Email"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Mob">Mob</label>
		<div class="controls">
			<input type="text" name="Mob" id="Mob" placeholder="Mob"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Address">Address</label>
		<div class="controls">
			<input type="text" name="Address" id="Address" placeholder="Address"></div>
	</div>
	<div class="control-group">
 		<div class="controls">
			<input type="submit" name="submit" id="submit" class="btn" value="Submit"></div>
	</div>
 
</form>

<?php
include "footer.php";
?>