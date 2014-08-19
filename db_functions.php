<?php
function connect_to_db(){
$host='localhost';
$user='badnutbe_iow';
$pass='dixons123';
if(!mysql_connect($host,$user,$pass)){
	echo "Can't connect to MySQL";
	exit;
}
if(!mysql_select_db($user)){
	echo "Can't connect to the specified database";
	exit;
}
}
?>