<?php
$con=mysql_connect("localhost","root","") 
or die("Invalid User or Password...cannot connect");
mysql_select_db("vaapcaas",$con) or die("Database not found....");
?>