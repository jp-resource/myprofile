<?php
include "header.php";

?>

<?php
$con = mysqli_connect("localhost","root","1234","my_profile");

if(mysqli_connect_errno()){
	echo "fail to connect DB: - ".mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM persons");

echo "<table class='table table-bordered table-striped'><tr>
	<th>Firstname</th><th>Lastname</th>
	<th>Email</th><th>Mob</th>
	<th>Address</th><th>Options</th>
	</tr>";

while($row = mysqli_fetch_array($result)){
	echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Mob'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "<td>
          <form action='edit.php?edit=".$row['pid']."' method='post'>
            <input type='submit' name='edit_id' value='Edit' class='btn' />
          </form> 
          <form action='delete.php?del=". $row['pid']."' method='post'>
            <input type='submit' name='delete_id' value='Delete' class='btn btn-danger' />
          </form> 
    </td>";
  echo "</tr>";
}

echo "</table>";
//mysqli_close($con);
?>


<a href="form.php" class="btn primary">Add New</a>

<?php
include "footer.php";
?>