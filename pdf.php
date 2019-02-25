<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8402148_root');
   define('DB_PASSWORD', 'abcde');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8402148_root',"abcde",'id8402148_resume');
?>
<?php
require 'pdfcrowd.php';
$email=$_COOKIE["key"];

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("ashwin1111", "241f58c0336cdebbd49d08e0aa0a967d");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("http://dynamicresume.000webhostapp.com/silent/convertpdf.php?email2=$email", "resume.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
?>

<?php
echo "<br><br><br><br><br><br><br><br><br><br><br><h1><center>Resume Generated Successfully</center<br><br><br><br><br></h1>";
?>
<link rel="stylesheet" href="pdf.css" type="text/css">
<?php
echo "<center><a href='http://dynamicresume.000webhostapp.com/silent/resume.pdf'>Download PDF</a></center";
?>