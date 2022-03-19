<?php
session_start();
if(!isset($_SESSION['Id'])){
  header('location:../userdashboard/login.php');
}
$con= mysqli_connect('localhost','root');

// if($con){
// 	echo "Connection successful";
//  }
//  else{
//  	echo "No connection";
//  }
 mysqli_select_db($con, 'homie');

 if(isset($_POST['register'])){
	 
  $location=$_POST['location'];
  $floor=$_POST['floor'];
  $rent=$_POST['rent'];
  $room=$_POST['room'];
  $purpose=$_POST['purpose'];
  $flat_photo=$_FILES['file'];
  $flat_photo1=$_FILES['file1'];
  $flat_photo2=$_FILES['file2'];
  $water_facility=$_POST['water_facility'];
  $parking=$_POST['parking'];
  $pet=$_POST['pet'];

  $filename=$flat_photo['name'];
$filepath= $flat_photo['tmp_name'];
$fileerror= $flat_photo['error'];
$filename1=$flat_photo1['name'];
$filepath1= $flat_photo1['tmp_name'];
$fileerror1= $flat_photo1['error'];
$filename2=$flat_photo2['name'];
$filepath2= $flat_photo2['tmp_name'];
$fileerror2= $flat_photo2['error'];

 if($fileerror==0){
	 $destfile='flat/'.$filename;
   $destfile1='flat/'.$filename1;
   $destfile2='flat/'.$filename2;
	//  echo "$destfile";
	 move_uploaded_file($filepath,$destfile);
   move_uploaded_file($filepath1,$destfile1);
   move_uploaded_file($filepath2,$destfile2);

 }
$userid =$_SESSION['Id'];
$owner_name = $_SESSION['Fullname'];
$query = "insert into flat_data(user_id,owner_name,location,floor,room,rent,purpose,image,image1,image2,waterfacility,pet,parking) values('$userid','$owner_name','$location','$floor','$room','$rent','$purpose','$destfile','$destfile','$destfile','$water_facility','$pet','$parking')";
// echo "$query";
$result=mysqli_query($con,$query);

if($result===false)
{ printf("error: %s\n", mysqli_error($con));
}
else{
    echo("Success");
}
header('location:registerflat.php');
}

 

 ?>
