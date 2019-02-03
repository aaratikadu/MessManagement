<?php 
include_once 'database.php';
$name=$_POST['name'];
$mo_number=$_POST['mobile'];
$email=$_POST['email'];
$clg_name=$_POST['college'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$dob=$_POST['dob'];
$room_no=$_POST['roomno'];
$taddress=$_POST['taddress'];
$paddress=$_POST['paddress'];

$sql="INSERT INTO student(name,mo_number,email,clg_name,branch,year,dob,room_no,taddress,paddress)VALUES('$name',$mo_number,'$email','$clg_name','$branch','$year',$dob,$room_no,'$taddress','$paddress');";
$result=mysqli_query($conn,$sql);
echo $result;


?>