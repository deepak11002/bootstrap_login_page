<?php
session_start();
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "qazwsx";
 $db = "kunal";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
include("conn.php");
$p1=$_REQUEST["r"];
$p2=$_REQUEST["p"];

$_SESSION["user"]=$p1;
$_SESSION["pass"]=$p2;
$res=mysqli_query($conn,"select * from dap where emailid='$p1' and pass='$p2'");
$count=mysqli_num_rows($res);
$i=0;
if($count>0)
{
?>
<html>
<script>
window.location.replace("http://localhost:3000");
</script>
</html>
<?php
}
?>
