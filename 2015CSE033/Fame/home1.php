<?php
include('connection.php');
session_start();
$con=mysqli_connect("localhost","root","1234","interview");
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$contact=$_POST['contact'];

echo $name;
echo $age;


$sql="insert into data(Name,Age,Address,Number)values($name,$age,$address,$contact)";
$result=mysqli_query($con,$sql)or die(mysqli_error($con));

 ?>
