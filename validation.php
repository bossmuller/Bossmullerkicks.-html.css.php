<?php
session_start();


$con=msql_connect('localhost','root','');
mysql_select_db($con,'userregistration');

$name= $_POST['username'];
$pass= $_POST['password'];
$email=$_POST['email'];
$number=$_POST['phone number'];

$s="select * FROM users WHERE name = '$name' && password = '$ pass'";

$result= mysql_query($con,$s);

$num= mysql_num_rows($result);

if($num==1){
	$_SESSION['username'] $name;
	header('location: Home.php');
}
else{ 
	header('location: Login.php');

	mysql_query($con,$reg);

	echo " Registration is Successfully"

}

?>