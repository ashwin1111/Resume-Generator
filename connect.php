<?php
$connection = mysqli_connect('localhost', 'id8402148_root', 'abcde');

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>