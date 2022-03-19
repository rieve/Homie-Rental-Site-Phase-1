<?php
session_start();
if(!isset($_SESSION['Id'])){
  header('location:../userdashboard/login.php');
}
$con= mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
 }
 else{
 	echo "No connection";
 }
 mysqli_select_db($con, 'homie');

 if(isset($_POST['register'])){
	// $name=$_POST['name']; 
  $location=mysqli_real_escape_string($con,$_POST['location']);
  $floor=mysqli_real_escape_string($con,$_POST['floor']);
  $room=mysqli_real_escape_string($con,$_POST['room']);
  $rent=mysqli_real_escape_string($con,$_POST['rent']);
  $purpose=mysqli_real_escape_string($con,$_POST['purpose']);
  $water_facility=mysqli_real_escape_string($con,$_POST['water_facility']);
  $parking=mysqli_real_escape_string($con,$_POST['parking']);
  $pet=mysqli_real_escape_string($con,$_POST['pets']);
 
  $house_photo=$_FILES['file'];
  $house_photo1=$_FILES['file1'];
  $house_photo2=$_FILES['file2'];
  $userid =$_SESSION['Id'];
  $ownername = $_SESSION['Fullname'];
 

  $filename=$house_photo['name'];
  $filepath= $house_photo['tmp_name'];
  $filename1=$house_photo1['name'];
  $filepath1= $house_photo1['tmp_name'];
  $filename2=$house_photo2['name'];
  $filepath2= $house_photo2['tmp_name'];
  $fileerror= $house_photo['error'];

 if($fileerror==0){
	 $destfile='house/'.$filename;
   $destfile1='house/'.$filename1;
   $destfile2='house/'.$filename2;
	//  echo "$destfile";
  //  echo "$destfile1";
  //  echo "$destfile2";

	 move_uploaded_file($filepath,$destfile);
   move_uploaded_file($filepath1,$destfile1);
   move_uploaded_file($filepath2,$destfile2);

 }

 
$query = "insert into house_data(user_id, owner_name, location,landmark,floor,room,rent,purpose,image,image1,image2,waterfacility,parking,pet) values('$userid','$ownername','$location','$landmark','$floor','$room','$rent','$purpose','$destfile','$destfile1','$destfile2','$water_facility','$parking','$pet')";
echo "$query";
 $result=mysqli_query($con,$query);
 if($result===false)
{ printf("error: %s\n", mysqli_error($con));
}
else{
    echo("Success");
}
 header('location:registerhouse.php');
}

 

 ?>
