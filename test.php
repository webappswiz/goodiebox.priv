<?php
ini_set('display_error',1);
$con=mysqli_connect("localhost","root","root","goodiebox");
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM users";
$result=mysqli_query($con,$sql);
// Fetch all
mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($con);
?>