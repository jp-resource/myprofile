<?php
include "header.php";

?>

<form class="form-horizontal" action="showdata.php" method="post">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
		<div class="controls">
			<input type="text" name="inputEmail"  id="inputEmail" placeholder="Email"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" name="inputPassword" id="inputPassword" placeholder="Password"></div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox">Remember me</label>
			<button type="submit" class="btn" name="btn">Sign in</button>
		</div>
	</div>
</form>

<?php
include "footer.php";
?>