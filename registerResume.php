<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8402148_root');
   define('DB_PASSWORD', 'abcde');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8402148_root',"abcde",'id8402148_resume');
if(isset($_POST) & !empty($_POST)){
@$name = ($_POST['name']);
@$initial = ($_POST['initial']);
@$gender = ($_POST['gender']);
@$dob = ($_POST['dob']);
@$phn = ($_POST['phn']);
@$email = ($_POST['email']);
@$address = ($_POST['address']);
@$colg = ($_POST['colg']);
@$deg = ($_POST['deg']);
@$grad = ($_POST['grad']);
@$cgpa = ($_POST['cgpa']);
@$schl1 = ($_POST['schl1']);
@$year1 = ($_POST['year1']);
@$percentage1 = ($_POST['percentage1']);
@$schl2 = ($_POST['schl2']);
@$year2 = ($_POST['year2']);
@$percentage2 = ($_POST['percentage2']);
@$achievements = ($_POST['achievements']);
@$aoi = ($_POST['aoi']);
@$projects = ($_POST['projects']);
$sql = "INSERT INTO test1 (name,initial,gender,dob,phn,email,address,colg,deg,grad,cgpa,schl1,year1,percentage1,schl2,year2,percentage2,achievements,aoi,projects) VALUES ('$name','$initial','$gender','$dob','$phn','$email','$address','$colg','$deg','$grad','$cgpa','$schl1','$year1','$percentage1','$schl2','$year2','$percentage2','$achievements','$aoi','$projects')";
	$result = mysqli_query($db,$sql);
	header("location:displayResume.php");
	if($result)
	{
             header("location:displayResume.php");
	}
	else{
		echo "<h1><br><br><br><br><br><center>USER REGISTRATION FAILED!</h1></center>";
}
}
?>