<?php
session_start();


$con =mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name= $_POST['user'];
$pass= $_POST['password'];
$s = "select * from usertable where name= '$name'";

//$res = mysqli_query($con, $s);

//$num =mysqli_num_rows($res);

//if($num == 1){
//echo "USERNAME IN USE";
//} else {
	$reg= "insert into usertable(name,password) values('$name','$pass')";
	mysqli_query($con, $reg);
	echo "REGISTRATION SUCCESSFUL";
//}

?>