<?php
 
	function OpenCon()
	{
		$host = "localhost";
		$db_name = "fypDatabase";
		$username = "root";
		$password = "SklBpePBjViLGWj6";
	 
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