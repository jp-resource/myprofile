<?php
	
	include_once('config.php');

	class database{
		protected $db_conn;
		public $db_name = DBNAME;
		public $db_host = DBHOST;
		public $db_pass = DBPASS;
		public $db_user = DBUSER;

		function connect(){
			try{
				$this->db_conn = new PDO("mysql:host = $this->db_host; dbname = $this->db_name", $this->db_user,$this->db_pass);
				return $this->db_conn;

			}catch(PDOException $e){
				return $e->getMessage();
			}

		}
	}

?>