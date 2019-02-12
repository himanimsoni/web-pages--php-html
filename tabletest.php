
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
     
        $dbhost='localhost:3306';
        $dbuser='root';
        $dbpass='root';
// Create connection
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
// Check connection
if (!$conn) {
     die("Connection failed: " .  mysql_error());
} 

$sql = "SELECT Roll_no,Sname FROM my_table";
mysql_select_db('firstdatabase');

$retval=  mysql_query($sql,$conn);

if (!$retval) {
     die("could not get data: " .  mysql_error());
} 


     // output data of each row
     while($row = mysql_fetch_assoc($retval)) {
         echo "Roll_no: {$row['Roll_no']} <br>". 
               "Sname: {$row['Sname']} <br>".
               "----------------<br>";        
     }

     echo "Success";

     mysql_close($conn);

        ?>
    </body>
</html>


</body>
</html>