<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8402148_root');
   define('DB_PASSWORD', 'abcde');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8402148_root',"abcde",'id8402148_resume');
 ?>
<?php
if(isset($_POST) & !empty($_POST)){

@$email1 = ($_POST['email1']);
@$password1 = ($_POST['password1']);


	$sql = "INSERT INTO test2 (email1,password1) VALUES ('$email1','$password1')";
	$result = mysqli_query($db,$sql);
	if($result)
	{
               header("location:login.php");
	}
	else{
		echo "<h1><br><br><br><br><br><center>USER REGISTRATION FAILED!</h1></center>";	
}
	
}

?>