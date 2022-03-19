<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>Hostel | Homie</title>
  	<!-- css links -->
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/responsive.css">
  	<!-- font icons -->
  	<link rel="stylesheet" type="text/css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<?php
  require("include/header.php");
?>
<span class="chatbot">
  <?php
  $whatsapp = '';
    while ($row=mysqli_fetch_assoc($result)) 
    {
      if ($row['_id']==$code) 
      {
        $whatsapp .='<a href="https://wa.me/977'. $row['mobile_no'] .'" target="_blank"><img src="images/whatsapp.png"></a>';
      }
    }
    echo $whatsapp;
  ?>
</span>
<section class="singlehostel">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7 col-lg-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="50000">
              <img class="d-block w-100" src="images/ht1.jpg" alt="First slide">
            </div>
            <div class="carousel-item" data-bs-interval="20000">
              <img class="d-block w-100" src="images/hostel1.jpg" alt="Second slide">

            </div>
            <div class="carousel-item" data-bs-interval="20000">
              <img class="d-block w-100" src="images/hostel2.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="map-right">
            <h4>Location Map</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d350.58036268699465!2d85.42585822615168!3d27.66696541230685!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6673986!2d85.42491609999999!4m5!1s0x39eb1aa67016c5b5%3A0x4fc25152047f89b1!2zaVRyZWtOZXBhbCwg4KSt4KSV4KWN4KSk4KSq4KWB4KSwIDQ0ODAw!3m2!1d27.667377!2d85.42530599999999!5e0!3m2!1sen!2snp!4v1627805932383!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-4">
        <div class="placeinfo">
          <div class="room-details">
            <h4>Tron Boy's Hostel</h4>
            <ul>
              <li><i class="las la-home"></i><span class="ownername">Ram Bahadur Suwal</span></li>
              <li><i class="las la-map-marker-alt"></i><span class="roomlocation">Gapali, Suryabinayak</span></li>
              <li><i class="las la-money-bill"></i><span class="roomfee">Rs. 9000</span>/Month</li>
            </ul>
            <span class="videoplay">
              <button href="" onclick="togglePopup1()">Live video</button> 
              <div class="popup" id="popup-1">
              <div class="overlay"></div>
              <div class="content">
                <div class="close-btn" onclick="togglePopup1()">&times;</div>
                <iframe width="800" height="400"
                src="https://www.youtube.com/embed/tgbNymZ7vqY?mute=1" allowfullscreen></iframe> 
              </div>
            </div>
            </span>
          </div>
          <div class="roomfacilities">
            <h4>Facilities</h4>
            <ol type="square">
              <li>Water supply (Tap water)</li>
              <li>parking (Bike and Car)</li>
              <li>Pets (Dog Allowed)</li>
            </ol>
          </div>
          <div class="roomapply">
            <div class="popup" id="popup-2">
              <div class="overlay"></div>
              <div class="content">
                <div class="close-btn" onclick="togglePopup2()">&times;</div>
                <h4>Owner Contact</h4>
                <ul>
                  <li>Owner Name : <span class="owner-name">Ram Bahadur Suwal</span></li>
                  <li>Contact No : <span class="owner-contact">9860435322</span></li>
                </ul>
              </div>
            </div>
            <button href="" onclick="togglePopup2()">Apply for <span>Hostel</span></button> 
          </div>
          <div class="map-bottom">
            <h4>Location Map</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d350.58036268699465!2d85.42585822615168!3d27.66696541230685!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6673986!2d85.42491609999999!4m5!1s0x39eb1aa67016c5b5%3A0x4fc25152047f89b1!2zaVRyZWtOZXBhbCwg4KSt4KSV4KWN4KSk4KSq4KWB4KSwIDQ0ODAw!3m2!1d27.667377!2d85.42530599999999!5e0!3m2!1sen!2snp!4v1627805932383!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  require("include/footer.php");
?>

<!-- js links -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- js code for popup -->
<script type="text/javascript">
  function togglePopup1(){
    document.getElementById("popup-1").classList.toggle("active");
  }
  function togglePopup2(){
    document.getElementById("popup-2").classList.toggle("active");
  }
</script>
<body>
</body>
</html>