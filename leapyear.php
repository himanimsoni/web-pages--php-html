<html>
	<head>
		<title> GTU questions </title>
	<head>
	
	<body>
		<form action="" method="post">
			Enter year:<input type="text" id="year" name="year"></br></br>
			<input type="Submit" value="Submit">
		</from>
	</body>
</html>

<?php
	if($_POST)
	{
		$year=$_POST['year'];

		if((($year%4)==0)and(($year%100)!=0) or (($year%400)==0))
		{
			echo "$year is leap year"; 
		}
		else
		{
			echo "$year is not a leap year"; 
		}
	}
?>