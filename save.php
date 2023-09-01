<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "qazwsx";
 $db = "kunal";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
include("conn.php");
$p1=$_REQUEST["N"];
$p2=$_REQUEST["E"];
$p5=$_REQUEST["M"];
$p3=$_REQUEST["pwd"];

mysqli_query($conn,"insert into dap values('$p1','$p2','$p5','$p3')");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <link rel="Stylesheet" href="succ.css">
</head>
<body>
    <p>Successfully Registered!!</p><br><br>
    <div>
        <a href="sign.html" >Click Here to LOGIN</a>
    </div>


</body>
</html>