<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Room | Homie</title>
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
<!-- room_register_form -->
<section class="registerroom">
    <div class="container">
        <h3>Register Room</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="wrapper">
                                    <input type="radio" name="slider" checked id="single-room">
                                    <input type="radio" name="slider" id="multi-room">
                                    <nav>
                                        <label for="single-room" class="single-room">Single Room</label>
                                        <label for="multi-room" class="multi-room">Multiple Room</label>
                                        <div class="slider"></div>
                                    </nav>
                                    <section class="roomfill">
                                        <div class="content content-1">
                                            <!-- singleroom_code_sart -->  
                                            <form class="form" role="form" autocomplete="off" action="room_data.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Location</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" placeholder="Enter Location" required name="location">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Floor</label>
                                                    <div class="col-md-6">
                                                        <select id="" class="form-control" size="0" name="floor">
                                                            <option disabled selected hidden>Choose Floor</option>
                                                            <option value="First Floor">First Floor</option>
                                                            <option value="Second Floor">Second Floor</option>
                                                            <option value="Third Floor">Third Floor</option>
                                                            <option value="Fourth Floor">Fourth Floor</option>
                                                            <option value="Fifth Floor">Fifth Floor</option>
                                                            <option value="Sixth Floor">Sixth Floor</option>
                                                            <option value="Ground Floor">Ground Floor</option>
                                                            <option value="Underground">Underground</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Rent / Month</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" placeholder="Enter rent per month" required name="rent">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Purpose</label>
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
                                                        <select id="" class="form-control select" size="0" name="water_facility">
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
                                                        <select id="" class="form-control" size="0" name="parking">
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
                                                        <select id="" class="form-control" size="0" name="pet">
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
                                                            <button type="submit" class="col-md-10 offset-md-1">Register</button>
                                                        </div>
                                                <?php } else{
                                                    ?>
                                                    <a class="col-md-10 offset-md-1" href="userdashboard/login.php" style="background: #5e7e9f; color:aliceblue; padding: 10px 20px; text-align: center; font-size: 18px;text-transform: uppercase;">Login to Register</a>
                                                <?php }
                                                ?> 
                                            </form>
                                        </div>
                                        <div class="content content-2">
                                            <!-- multipleroom_code_start -->
                                            <span class="notice">Only the room on the same floor are to be registered as multiple rooms. Rooms at different floors should be registered as single room individually.</span>
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Location</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" placeholder="Enter Location" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Number of Rooms</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="number" min="1">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Floor</label>
                                                    <div class="col-md-6">
                                                        <select id="" class="form-control" size="0">
                                                            <option disabled selected hidden>Choose Floor</option>
                                                            <option value="First Floor">First Floor</option>
                                                            <option value="Four Floor">Four Floor</option>
                                                            <option value="Third Floor">Third Floor</option>
                                                            <option value="Fourth Floor">Fourth Floor</option>
                                                            <option value="Fifth Floor">Fifth Floor</option>
                                                            <option value="Sixth Floor">Sixth Floor</option>
                                                            <option value="Ground Floor">Ground Floor</option>
                                                            <option value="Underground">Underground</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Rent / Month</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" placeholder="Enter rent per month" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Purpose</label>
                                                    <div class="col-md-6">
                                                        <select id="" class="form-control" size="0">
                                                            <option disabled selected hidden>Choose Purpose</option>
                                                            <option value="Personal Stay">Personal Stay</option>
                                                            <option value="Office Use">Office Use</option>
                                                            <option value="All">All</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Room Photo's <br><span class="sub-text">(Upload atleast 3 photo's)</span></label>
                                                    <div class="col-md-6">
                                                        <div class="input_fields_wrap">
                                                            <div><input type="file" name="mytext[]"></div>
                                                            <button class="add_field_button">Add Other Rooms Photo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 offset-md-1 col-form-label">Water Facility</label>
                                                    <div class="col-md-6">
                                                        <select id="" class="form-control select" size="0">
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
                                                        <select id="" class="form-control" size="0">
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
                                                        <select id="" class="form-control" size="0">
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
                                                            <button type="submit" class="col-md-10 offset-md-1">Register</button>
                                                        </div>
                                                <?php } else{
                                                    ?>
                                                    <a class="col-md-10 offset-md-1" href="userdashboard/login.php" style="background: #5e7e9f; color:aliceblue; padding: 10px 20px; text-align: center; font-size: 18px;text-transform: uppercase;">Login to Register</a>
                                                <?php }
                                                ?>                                            
                                            </form>
                                        </div>
                                    </section>
                                </div>
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

<!-- js links -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var x = 1; //initlal text box count
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
             //text box increment
            $(wrapper).append('<div><input type="file" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            x++; 
      }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
        e.preventDefault(); 
        $(this).parent('div').remove(); 
        x--;
    })
});
</script>
</body>
</html>