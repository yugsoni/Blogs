<?php
	
	$conn = mysqli_connect("localhost","root","");
	if($conn)
	{
		$db = mysqli_select_db($conn,"github");
		if($db)
		{
			echo "Connected"."<br>";
		}
		else
		{
			echo "Not Connected";
		}
	}

?>