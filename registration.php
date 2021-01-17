<?php

session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root');
if(mysqli_connect_errno())
{
	echo"error occured".mysqli_connect_errno();
}

mysqli_select_db($con, 'uregistration');

$name = $_POST['Username'];
$pass = $_POST['Password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num==1){
	echo"username already taken";
}else{
	$reg="insert into usertable(name,password) values ('$name','$pass')";
	mysqli_query($con, $reg);
	echo"Registeration successful";
}

?>