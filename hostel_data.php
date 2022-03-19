<?php
session_start();
if(!isset($_SESSION['Id'])){
  header('location:../userdashboard/login.php');
}
$con= mysqli_connect('localhost','root');

 mysqli_select_db($con, 'homie');

 if(isset($_POST['register'])){
	$hostel_name=$_POST['hostel_name']; 
  $location=$_POST['location'];
  $hostel_for = $_POST['hostelfor'];
  $pricepermonth=$_POST['price'];
  $typeofroom=$_POST['typeofroom'];
  $room_photo=$_FILES['file'];
  $room_photo1=$_FILES['file1'];
  $room_photo2=$_FILES['file2'];
  $water_facility=$_POST['waterfacility'];
  $food_time=$_POST['foodtime'];
  $food_menu=$_FILES['file3'];
  $furniture=$_POST['furniture'];
  $userid =$_SESSION['Id'];
  $ownername = $_SESSION['Fullname'];
// print_r($flat_photo);
$filename=$room_photo['name'];
$filepath= $room_photo['tmp_name'];
$fileerror= $room_photo['error'];
$filename1=$room_photo1['name'];
$filepath1= $room_photo1['tmp_name'];
$fileerror1= $room_photo1['error'];
$filename2=$room_photo2['name'];
$filepath2= $room_photo2['tmp_name'];
$fileerror2= $room_photo2['error'];
$filename3=$food_menu['name'];
$filepath3= $food_menu['tmp_name'];
$fileerror3= $food_menu['error'];


 if($fileerror==0){
	 $destfile='hostel/'.$filename;
   $destfile1='hostel/'.$filename1;
   $destfile2='hostel/'.$filename2;
   $destfile3='food_menu/'.$filename3;
	//  echo "$destfile";
	 move_uploaded_file($filepath,$destfile);
   move_uploaded_file($filepath1,$destfile1);
   move_uploaded_file($filepath2,$destfile2);
   move_uploaded_file($filepath3,$destfile3);

 }
if($hostel_for==="Boy")
 {
  $query = "INSERT into boyshostel_data(user_id,owner_name,hostel_name,location,hostel_type,rent,room_type,image,image1,image2,waterfacility,foodtime,foodmenu,furniture	
  ) values('$userid','$ownername','$hostel_name','$location','$hostel_for','$pricepermonth','$typeofroom','$destfile','$destfile1','$destfile2','$water_facility','$food_time','$destfile3','$furniture')"; 
 }
 else{
  $query = "INSERT into girlshostel_data(user_id,owner_name,hostel_name,location,landmark,hostel_type,rent,room_type,image,image1,image2,waterfacility,foodtime,foodmenu,furniture	
) values('$userid','$ownername','$hostel_name','$location', '$landmark','$hostel_for','$pricepermonth','$typeofroom','$destfile','$destfile1','$destfile2','$water_facility','$food_time','$destfile3','$furniture')"; 
 }
echo "$query";
 $result=mysqli_query($con,$query);
 if($result===false)
{ printf("error: %s\n", mysqli_error($con));
}
else{
    echo("Success");
}
header('location:registerhostel.php');
}
else{
	 echo "No button has been clicked";
 }

 

 ?>
