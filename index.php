<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>House | Homie</title>
  	<!-- css links -->
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/responsive.css">
  	<!-- font icons -->
  	<link rel="stylesheet" type="text/css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style type="text/css">
      .header .bgwrp{
        background-color: transparent !important; 
      }
      .header .content .links li a,
      .header .content .links li label{
        color: fff;
      }
      .header .content .links>li>a:after {
        content: '';
        height: 2px;
        width: 0;
        background-color: #fff;
        position: absolute;
        bottom: 0;
        margin-bottom: 10px;
        border-radius: 10px;
        margin-left: -6.2%;
        visibility: hidden;
      }
      .header .content .links>li:nth-child(4) a:after{
        margin-left: -5%;
      }
      .header .content .links>li:last-child a:after{
        margin-left: -4.5%;
      }
      .header .content .links>li>a:hover{
        color: #fff;
      } 
      .header .content .links>li>a:hover:after{
        visibility: visible;
        width: 35px;
        transition: 300ms ease;
      }
      @media screen and (max-width: 900px){
        .header .content .links>li>a:hover{
          color: #000;
        }
        .header .content .links>li>a:hover:after{
          display: none;
        }
      }
    </style>
</head>
<body>
<?php
  require("include/header.php");
?>
<!-- Image Slider -->
<section class="banner">
  <div class="overlay"></div>
  <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="20000">
        <img class="d-block w-100" src="images/room1.jpg" alt="First slide">
        <div class="carousel-caption d-md-block">
          <h5>Find a Place you can Truly Call Home</h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="20000">
        <img class="d-block w-100" src="images/house3.jpg" alt="Second slide">
        <div class="carousel-caption d-md-block">
          <h5>Find your Perfect Rental Home</h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="20000">
        <img class="d-block w-100" src="images/hostel1.jpg" alt="Third slide">
        <div class="carousel-caption d-md-block">
          <h5>Find a Suitable Hostel</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- admin login -->
<div class="admin-login">
  <a href="admindashboard/login.php">A</a>
</div>
<!-- explore -->
<section class="main-location">
  <div class="container">
    <h2>Explore</h2>
    <div class="row">
      <div class="col-md-3">
        <span class="major-location">
          <img src="images/kathmandu.jpg" alt="">
          <p>Kathmandu</p>
        </span>
      </div>
      <div class="col-md-3">
        <span class="major-location">
          <img src="images/bhaktapur.webp" alt="">
          <p>Bhaktapur</p>
        </span>
      </div>
      <div class="col-md-3">
        <span class="major-location">
          <img src="images/lalitpur.jpg" alt="">
          <p>Lalitpur</p>
        </span>
      </div>
      <div class="col-md-3">
        <span class="major-location">
          <img src="images/pokhara.webp" alt="">
          <p>Pokhara</p>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- services section -->
<section class="services">
  <div class="container">
    <h1>Services</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="services-card">
          <img src="images/Buy_a_home.png" alt="">
          <h3>Find a Home</h3>
          <p>Buy a home Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</p>
          <span class="button">
            <a href="findhouse.php">Find Home</a>
          </span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-card">
          <img src="images/Rent_a_home.png" alt="">
          <h3>Find a Flat</h3>
          <p>Buy a home Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</p>
          <span class="button">
            <a href="findflat.php">Find Flat</a>
          </span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-card">
          <img src="images/Sell_a_home.png" alt="">
          <h3>List your Home</h3>
          <p>Buy a home Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</p>
          <span class="button">
            <a href="registerhouse.php">Rent Home</a>
          </span>
        </div>
      </div>
    </div>
    <div class="sr-ht">
      <div class="overlay"></div>
      <div class="row">
        <div class="col-md-6">
          <h3>Register Your Hostel</h3>
          <p>Buy a home Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</p>
            <span class="button">
              <a href="registerhostel.php">Register Hostel</a>
          </span>
        </div>
        <div class="col-md-6">
          <img src="images/Rent_a_home.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  require ('include/footer.php');
?>
<!-- js links -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function(){
      $(window).scroll(function(){
        if($(window).scrollTop() > 0){
          $(".bgwrp").addClass("sticky");
          $(".sticky").removeClass("bgwrp");
        }
        else
        {
          $(".sticky").addClass("bgwrp");
          $(".sticky").removeClass("sticky");
        }
      });
    });
</script>
</body>
</html>