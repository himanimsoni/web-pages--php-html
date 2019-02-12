<html>
	<head>
		<title> GTU questions </title>
	<head>
	
	<body>
		<form action="" method="post">
			Enter no:<input type="text" id="number" name="number"></br></br>
			<input type="Submit" value="Submit">
		</from>
	</body>
</html>

<?php

	if($_POST)
	{
		$number=$_POST["number"];
	
		if(($number%2)==0)
		{
			echo "even number";
		}
		else
		{
			echo "odd number";
		}
	}
?>