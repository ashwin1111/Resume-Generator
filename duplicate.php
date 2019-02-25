<html>
<head>
    <title>
        Formal Resume
    </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8402148_root');
   define('DB_PASSWORD', 'abcde');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8402148_root',"abcde",'id8402148_resume');?>
</head>
<body>
<?php
    //session_start();
       $email2= $_COOKIE["key"];
       if(!is_null($email2)){
 $sql ="SELECT address,phn,email,deg,grad,colg,cgpa,year1,schl1,percentage1,year2,schl2,percentage2,projects,aoi,achievements,name,initial FROM test1 WHERE email='$email2';";
 $result = mysqli_query($db,$sql);
// echo "hgh";
}
else {
  header("location:login.php");
}
 //echo "jasdhjas";
 while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
//echo "sfsf";
//Profile
//name and initial
	printf ("<h3><u>Profile</u></h3><b>%s %s",$row[16],$row[17]);
//address
	printf ("</b><br>%s",$row[0]);
//contact
	printf ("<br>%s | %s<br><br>",$row[1],$row[2]);
 	 

//Education
//degree and year
	printf ("<h3><u>Education</u></h3><b>College:<br></b>%s (%s)<br>",$row[3],$row[4]);
//college
	printf ("%s<br><b>",$row[5]);
//cgpa
	printf("CGPA:%s<br><br><br>",$row[6]);
   
//HSC
//year
	printf("HSC:<br></b>Year of passing out:%s</b><br>",$row[7]);
//school name
	printf("%s<br><b>",$row[8]);
//percentage
	printf("Percentage:%s<br><br><br>",$row[9]);

//SSLC
//year
	printf("SSLC:<br></b>Year of passing out:%s</b><br>",$row[10]);
//school name
	printf("%s<br><b>",$row[11]);
//percentage
	printf("Percentage:%s",$row[12]);


//Projects
	printf("<br><br><h3><u>Projects</u></h3></b>%s<br>",$row[13]);


//Area of Interest
	printf("<br><h3><u>Area of Interest</u></h3></b>%s",$row[14]);


//Achievements
	printf("<br><h3><u><br>Achievements</u></h3></b>%s",$row[15]);

}
?>
</body>
</html>