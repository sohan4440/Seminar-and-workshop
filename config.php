<?php
 $server="localhost";
 $dbname="seminar";
 $dbuser="root";
 $dbpass="";
 $con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
 if($con)
 {
 	echo 'successfully';
 }
 else
 {
 	echo 'faild to databased with connect';
 }
?>