<?php
session_start();
header('location: Login.php')

$con=msql_connect('localhost','root','');
mysql_select_db($con,'userregistration');

$name= $_POST['username'];
$pass= $_POST['password'];
$email=$_POST['email'];
$number=$_POST['phone number'];

$s="select * FROM users WHERE name = '$name' ";

$result= mysql_query($con,$s);

$num= mysql_num_rows($result);

if($num==1){
	echo"You already have an Account";
}
else{ 
	$reg= " insert into users(username,password,email,phone number) values ( '$name' , '$pass' , '$email' , '$number' )";
	mysql_query($con,$reg);

	echo " Registration is Successfully"

}

?>