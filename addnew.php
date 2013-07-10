<?php
include "header.php";
?>
<form class="form-horizontal" action="details.php">
	<div class="control-group">
		<label class="control-label" for="inputName">Name</label>
		<div class="controls">
			<input type="text" id="inputName" placeholder="Name"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPhone">Phone</label>
		<div class="controls">
			<input type="text" id="inputPhone" placeholder="Phone"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
		<div class="controls">
			<input type="text" id="inputEmail" placeholder="Email"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputAddress">Address</label>
		<div class="controls">
			<input type="password" id="inputAddress" placeholder="Address"></div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Submit</button>
		</div>
	</div>
</form>
<?php
include "footer.php";
?>