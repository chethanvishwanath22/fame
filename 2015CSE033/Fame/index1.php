<?php
session_start();

$con=mysqli_connect("localhost","root","1234","interview");
$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["email"]=$email;
$_SESSION["email"]=$email;
echo $_SESSION['email'];
$sql = "SELECT email,Password FROM faculty where email='$email' and Password='$password' ";
$result=mysqli_query($con,$sql)or die("error querying database");
$row=mysqli_fetch_array($result);

if($row[0]==$password){
header("location:hom2.php");
}
elseif($row[0]==NULL)
{
die("invalid user");
}
else
{
die("invalid password");
}
?>
