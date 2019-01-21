<?php
 
	function OpenCon()
	{
		$host = "172.17.0.195";
		$db_name = "db1516348_ameritocracyDB";
		$username = "u1516348_DBuser";
		$password = "48zIEgbO";
	 
			try 
			{
				$conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
				 
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			 
			catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
			}

		return $conn;
	}
	 
	function CloseCon($conn)
	{
		$conn = null;
	}
   
?>