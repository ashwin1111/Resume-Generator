<!DOCTYPE html>
<html>
<head>
    <title>
        Login
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

    <div class="container">
<center>
        <h1>Login</h1>
</center>
<br>
<form name="form2" action="test2.php" method="POST">
    <div class="form-group">
<label for="email">Email:</label>
    <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2"><br>
<label for="password">Password:</label>
  <input type="password" class="form-control" placeholder="Enter password" name="password2" id="password2">
<br><br>
 <center>
 <button class="btn btn-primary btn-lg btn-block" name="log">Login</button>
 </center>
</div>
</form>
</div>

</body>
</html>