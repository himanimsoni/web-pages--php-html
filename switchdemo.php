

<?php
        echo "Today is" .date("Y/m/d"). "</br>";
	$date1 = date("Y/m/d");
	
	switch($date1)
	{
		case '2016/05/12': echo "dentist appoinment";
				  break;
				  
		case '2016/05/10': echo "go to conference";
			       break;
				   
		default: echo "no events are schedule\n";
                 break;		
	}
?>	