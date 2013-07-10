<?php
	
	/**
	* 
	*/
	class ManageDatabase
	{
		
		function __construct()
		{
			# code...
			include_once('class.database.php');
			$conn = new database;
			$this->link = $conn->connect();

			return $this->link;
		}
	}

	$something = new ManageDatabase;

?>