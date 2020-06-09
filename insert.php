<?php
include 'connection.php';
$con = OpenConn();
$score='0';
if(isset($_POST['submit']))
{
$url=$_POST['url'];
$sql="insert into data(`url`) values('$url')";
$res=mysqli_query($con,$sql);
if(! $res ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>