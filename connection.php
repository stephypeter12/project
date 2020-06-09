<?php
function OpenConn()
 {	 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "shortener";
$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error); 
 return $con;
 }
function CloseCon($conn)
 {
 $conn -> close();
}
?>

