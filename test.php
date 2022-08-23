<?php   
include('connect.php');

$i=1;

while($i<=20){
	$a='B'.$i++;

	$sql="INSERT INTO rooms(room, status)VALUES('$a', 'available') ";
	$result=mysql_query($sql);
}

?>