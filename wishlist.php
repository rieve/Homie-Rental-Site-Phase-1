<?php
$conn = mysqli_connect("localhost","root","","homie");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist | Homie</title>
    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- font icons -->
    <link rel="stylesheet" type="text/css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php
  require ('include/header.php');
?>

<section class="wishlist">
    <div class="container">
        <h3>Wishlist</h3>
        <div class="wishlist-tab">
            <div class="row">
                <!-- room info display in wishlist -->
                <?php if(isset($_SESSION['Id'])){
                    $id = $_SESSION['Id'];
                    $sql = "SELECT * FROM `wishlist` INNER JOIN room_data WHERE wishlist.user_id = $id AND wishlist.room_id=room_data.room_id";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) 
                        {
                          while ($row=mysqli_fetch_assoc($result)) 
                          {
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="list-tab">    
                        <div class="room-tab-border"></div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <a href="singleroom.php?id=<?=$row['room_id']?>"><img src="<?=$row['image']?>" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <form name="myform" method="POST" action="deleteitem/deleteroom.php">
                                        <input name="room_id" type="hidden" value="<?=$row['room_id']?>">
                                        <button type="submit" name="delete"><i class="las la-trash-alt"></i></button><br>
                                    </form>
                                </div>
                                <ul class="list-info room-tag">
                                    <li><p><span class="room-list-tag">Room</span></p></li>
                                    <li><h6>Owner Name</h6></li>
                                    <li><p><?=$row['owner_name']?></p></li>
                                    <li><h6>Location</h6></li>
                                    <li><p><?=$row['location']?></p></li>
                                    <li><h6>Rent</h6></li>
                                    <li><p><?=$row['rent']?></p></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php } } }?>

                <!-- flat info display in wishlist -->
                <?php if(isset($_SESSION['Id'])){
                    $id = $_SESSION['Id'];
                    $sql = "SELECT * FROM `wishlist` INNER JOIN flat_data WHERE wishlist.user_id = $id AND wishlist.flat_id=flat_data.flat_id";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) 
                        {
                          while ($row=mysqli_fetch_assoc($result)) 
                          {
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="list-tab">
                        <div class="flat-tab-border"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="singleflat.php?id=<?=$row['flat_id']?>"><img src="<?=$row['image']?>" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <form name="myform" method="POST" action="deleteitem/deleteflat.php">
                                        <input name="flat_id" type="hidden" value="<?=$row['flat_id']?>">
                                        <button type="submit" name="delete"><i class="las la-trash-alt"></i></button><br>
                                    </form>
                                </div>
                                <ul class="list-info flat-tag">
                                    <li><p><span class="flat-list-tag">Flat</span></p></li>
                                    <li><h6>Owner Name</h6></li>
                                    <li><p><?=$row['owner_name']?></p></li>
                                    <li><h6>Location</h6></li>
                                    <li><p><?=$row['location']?></p></li>
                                    <li><h6>Rent</h6></li>
                                    <li><p><?=$row['rent']?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } }?>

                <!-- house info display in wishlist -->
                <?php if(isset($_SESSION['Id'])){
                    $id = $_SESSION['Id'];
                    $sql = "SELECT * FROM `wishlist` INNER JOIN house_data WHERE wishlist.user_id = $id AND wishlist.house_id=house_data.house_id";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) 
                        {
                          while ($row=mysqli_fetch_assoc($result)) 
                          {
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="list-tab">
                        <div class="house-tab-border"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="singlehouse.php?id=<?=$row['house_id']?>"><img src="<?=$row['image']?>" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <form name="myform" method="POST" action="deleteitem/deletehouse.php">
                                        <input name="house_id" type="hidden" value="<?=$row['house_id']?>">
                                        <button type="submit" name="delete"><i class="las la-trash-alt"></i></button><br>
                                    </form>
                                </div>
                                <ul class="list-info house-tag">
                                    <li><p><span class="house-list-tag">House</span></p></li>
                                    <li><h6>Owner Name</h6></li>
                                    <li><p><?=$row['owner_name']?></p></li>
                                    <li><h6>Location</h6></li>
                                    <li><p><?=$row['location']?></p></li>
                                    <li><h6>Rent</h6></li>
                                    <li><p><?=$row['rent']?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } }?>

                <!-- boyshostel info display in wishlist -->
                <?php if(isset($_SESSION['Id'])){
                    $id = $_SESSION['Id'];
                    $sql = "SELECT * FROM `wishlist` INNER JOIN boyshostel_data WHERE wishlist.user_id = $id AND wishlist.bhostel_id=boyshostel_data.bhostel_id";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) 
                        {
                          while ($row=mysqli_fetch_assoc($result)) 
                          {
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="list-tab">
                        <div class="hostel-tab-border"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="singlehostel.php"><img src="<?=$row['image']?>" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <form name="myform" method="POST" action="deleteitem/deletebhostel.php">
                                        <input name="bhostel_id" type="hidden" value="<?=$row['bhostel_id']?>">
                                        <button type="submit" name="delete"><i class="las la-trash-alt"></i></button><br>
                                    </form>
                                </div>
                                <ul class="list-info hostel-tag">
                                    <li><p><span class="hostel-list-tag">Hostel</span></p></li>
                                    <li><h6>Hostel Name</h6></li>
                                    <li><p><?=$row['hostel_name']?></p></li>
                                    <li><h6>Location</h6></li>
                                    <li><p><?=$row['location']?></p></li>
                                    <li><h6>Rent</h6></li>
                                    <li><p><?=$row['rent']?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } }?>

                <!-- girlshostel info display in wishlist -->
                <?php if(isset($_SESSION['Id'])){
                    $id = $_SESSION['Id'];
                    $sql = "SELECT * FROM `wishlist` INNER JOIN girlshostel_data WHERE wishlist.user_id = $id AND wishlist.ghostel_id=girlshostel_data.ghostel_id";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) 
                        {
                          while ($row=mysqli_fetch_assoc($result)) 
                          {
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="list-tab">
                        <div class="hostel-tab-border"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="singlehostel.php"><img src="<?=$row['image']?>" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <form name="myform" method="POST" action="deleteitem/deleteghostel.php">
                                        <input name="ghostel_id" type="hidden" value="<?=$row['ghostel_id']?>">
                                        <button type="submit" name="delete"><i class="las la-trash-alt"></i></button><br>
                                    </form>
                                </div>
                                <ul class="list-info hostel-tag">
                                    <li><p><span class="hostel-list-tag">Hostel</span></p></li>
                                    <li><h6>Hostel Name</h6></li>
                                    <li><p><?=$row['hostel_name']?></p></li>
                                    <li><h6>Location</h6></li>
                                    <li><p><?=$row['location']?></p></li>
                                    <li><h6>Rent</h6></li>
                                    <li><p><?=$row['rent']?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } }else{?>
                    <div class="col-md-12 emptycart" align="center">
                        <img src="images/emptycart.png">
                        <p>Your Wishlist is Empty</p>
                        <a href="index.php">Go to Homepage</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
  require ('include/footer.php');
?>
</body>
</html>