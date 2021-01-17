<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.html');
}
?>
<html>
<head>
	<title>welcome page</title>
</head>
<body>
	<a href="logout.php">logout</a>
<h1>welcome<?php echo $_SESSION['username'];?></h1>
</body>
</html>