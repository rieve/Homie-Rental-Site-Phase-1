<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Flat | Homie</title>
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
<!-- house_register_form -->
<section class="registerhouse">
    <div class="container">
        <h3>Register your House</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="house_data.php" method="POST" enctype="multipart/form-data">
                               
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Location</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter Location" required name="location">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Number of Floor</label >
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" min="1" name="floor">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Rooms /Floor</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" min="1" name="room">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Rent / Month</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter rent per month" name="rent">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Puropse</label>
                                        <div class="col-md-6">
                                            <select id="" class="form-control" size="0" name="purpose">
                                                <option disabled selected hidden>Choose Purpose</option>
                                                <option value="Personal Stay">Personal Stay</option>
                                                <option value="Office Use">Office Use</option>
                                                <option value="All">All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Flat Photo's <br><span class="sub-text">(Upload atleast 3 photo's)</span></label>
                                        <div class="col-md-6">
                                            <input type="file" name="file" id="file" multiple />
                                            <input type="file" name="file1" id="file" multiple />
                                            <input type="file" name="file2" id="file" multiple />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Water Facility</label>
                                        <div class="col-md-6">
                                            <select id="user_time_zone" class="form-control select" size="0" name="water_facility">
                                                <option disabled selected hidden>Choose</option>
                                                <option value="Tap Water">Tap Water</option>
                                                <option value="Tanker Water">Tanker Water</option>
                                                <option value="Well water">Well water</option>
                                                <option value="Not Available">Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Parking</label>
                                        <div class="col-md-6">
                                            <select id="user_time_zone" class="form-control" size="0" name="parking"> 
                                                <option disabled selected hidden>Choose</option>
                                                <option value="Two Wheelers">Two Wheelers</option>
                                                <option value="Four Wheelers">Four Wheelers</option>
                                                <option value="Not Available">Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 offset-md-1 col-form-label">Pets</label>
                                        <div class="col-md-6">
                                            <select id="user_time_zone" class="form-control" size="0" name="pets">
                                                <option disabled selected hidden>Choose</option>
                                                <option value="Allowed">Allowed</option>
                                                <option value="Not Allowed">Not Allowed</option>
                                            </select>
                                        </div>
                                    </div>
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