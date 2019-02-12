<html>
<body>

<?php
$myfile = fopen("phpdemo.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("phpdemo.txt"));
fclose($myfile);
?>

</body>
</html>