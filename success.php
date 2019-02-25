<!DOCTYPE html>
<html>
<head>
	<title>
		login success
	</title>
	<?php
//	session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8402148_root');
   define('DB_PASSWORD', 'abcde');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8402148_root',"abcde",'id8402148_resume');
 ?>
</head>
<body>
<?php

//echo "php logged in part";
$email2 = $_COOKIE['email2'];
//echo $email2;
	$sql = "UPDATE test2 SET id = 1 WHERE email1 = '$email2'";
	$result = mysqli_query($db,$sql);

	header("location:resume.php");

 ?>








</body>
</html>