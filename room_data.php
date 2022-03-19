<?php

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
  $rent=mysqli_real_escape_string($con,$_POST['rent']);
  $purpose=mysqli_real_escape_string($con,$_POST['purpose']);
  $water_facility=mysqli_real_escape_string($con,$_POST['water_facility']);
  $parking=mysqli_real_escape_string($con,$_POST['parking']);
  $pet=mysqli_real_escape_string($con,$_POST['pet']);
 
  $room_photo=$_FILES['file'];
  $room_photo1=$_FILES['file1'];
  $room_photo2=$_FILES['file2'];
  
 

  $filename=$room_photo['name'];
  $filepath= $room_photo['tmp_name'];
  $filename1=$room_photo1['name'];
  $filepath1= $room_photo1['tmp_name'];
  $filename2=$room_photo2['name'];
  $filepath2= $room_photo2['tmp_name'];
  $fileerror= $room_photo['error'];

 if($fileerror==0){
	 $destfile='room/'.$filename;
   $destfile1='room/'.$filename1;
   $destfile2='room/'.$filename2;
	//  echo "$destfile";
  //  echo "$destfile1";
  //  echo "$destfile2";

	 move_uploaded_file($filepath,$destfile);
   move_uploaded_file($filepath1,$destfile1);
   move_uploaded_file($filepath2,$destfile2);

 }

 
$query = "INSERT into room_data(location,floor,rent,purpose,image,image1,image2,waterfacility,parking,pet) values('$location','$floor','$rent','$purpose','$destfile','$destfile1','$destfile2','$water_facility','$parking','$pet')";
echo "$query";
 $result=mysqli_query($con,$query);
 if($result===false)
{ printf("error: %s\n", mysqli_error($con));
}
else{
    echo("Success");
}
// header('location:registerroom.php');
}
else{
	 echo "No button has been clicked";
 }

 

 ?>
