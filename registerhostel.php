<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Hostel | Homie</title>
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
<!-- hostel_register_form -->
<section class="registerhostel">
    <div class="container">
        <h3>Register your Hostel</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="hostel_data.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Hostel Name</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter Hostel Name" name="hostel_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Location</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter Location" name="location">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Hostel For</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control select" size="0" name="hostelfor">
                                                <option disabled selected hidden>Select</option>
                                                <option value="Boy">Boy's Hostel</option>
                                                <option value="Girl">Girl's Hostel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Price / Month</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter price per month" required name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Type of room</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control select" size="0" name="typeofroom">
                                                <option disabled selected hidden>Choose</option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Single and Double">Single and Double</option>
                                                <option value="All">All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Room Photo's <br><span class="sub-text">(Upload atleast 3 photo's)</span></label>
                                        <div class="col-md-6">
                                            <input type="file" name="file" id="file" multiple />
                                            <input type="file" name="file1" id="file" multiple />
                                            <input type="file" name="file2" id="file" multiple />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Water Facility</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control select" size="0" name="waterfacility">
                                                <option disabled selected hidden>Choose</option>
                                                <option value="Tap Water">Tap Water</option>
                                                <option value="Tanker Water">Tanker Water</option>
                                                <option value="Well water">Well water</option>
                                                <option value="Not Available">Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Total Food Timing</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control" size="0" name="foodtime">
                                                <option disabled selected hidden>Select</option>
                                                <option value="1 Meal a day">1 Meal a day</option>
                                                <option value="2 Meals a day">2 Meals a day</option>
                                                <option value="3 Meals a day">3 Meals a day</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Food Menu</label>
                                        <div class="col-md-6 video">
                                            <input type="file" name="file3" id="file" multiple />
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Furnitures and Materials Provided</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control" size="0" name="furniture">
                                                <option disabled selected hidden>Select</option>
                                                <option value="Bed">Bed</option>
                                                <option value="Study Table">Study Table</option>
                                                <option value="Cup Board">Cup Board</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <?php
                                        if(isset($_SESSION['Id'])){
                                        ?> 
                                            <div class="form-group row">
                                                <button type="submit" name="register" class="col-md-10 offset-md-1">Register</button>
                                            </div>
                                        <?php } else{
                                            ?>
                                            <a class="col-md-10 offset-md-1" href="userdashboard/login.php" style="background: #5e7e9f; color:aliceblue; padding: 10px 20px; text-align: center; font-size: 18px;text-transform: uppercase;">Login to Register</a>
                                        <?php }
                                    ?> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
<?php
    require ("include/footer.php");
?>
</body>
</html>