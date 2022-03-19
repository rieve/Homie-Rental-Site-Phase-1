<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find House | Homie</title>
    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- font icons -->
    <link rel="stylesheet" type="text/css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php
  require ('include/header.php');
?>

<section class="findhouse">
  <div class="require-filter">
    <h1>All Available Houses</h1>
    <ul>
      <li><!-- location filter -->
        <div class="list-group testch">
          <label for="btn">Location</label>
          <input class="chk" type="checkbox" id="btn">
          <ul>
            <?php
              $query = "
              SELECT DISTINCT(location) FROM house_data ORDER BY location ASC";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
              ?>
                <li>
                  <div class="list-group-item checkbox">
                    <input type="checkbox" class="filter_all location" value="<?php echo $row['location']; ?>">
                    <?php echo $row['location']; ?> 
                  </div>
                </li>
              <?php
              }
            ?>
          </ul>
        </div>
      </li>
      <li><!-- rooms per floor filter -->
        <div class="list-group testch">
          <label for="btn1">Number of floor</label>
          <input class="chk" type="checkbox" id="btn1">
          <ul>
            <?php
              $query = "SELECT DISTINCT(room) FROM house_data ORDER BY room ASC";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
              ?>
                <li>
                  <div class="list-group-item checkbox">
                    <input type="checkbox" class="filter_all room" value="<?php echo $row['room']; ?>">
                    <?php echo $row['room']; ?> 
                  </div>
                </li>
              <?php
              }
            ?>
          </ul>
        </div>
      </li>
      <li><!-- pet filter -->
        <div class="list-group testch">
          <label for="btn2">Pet</label>
          <input class="chk" type="checkbox" id="btn2">
          <ul>
            <?php
              $query = "
              SELECT DISTINCT(pet) FROM house_data ORDER BY pet ASC";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
              ?>
                <li>
                  <div class="list-group-item checkbox">
                    <input type="checkbox" class="filter_all pet" value="<?php echo $row['pet']; ?>">
                    <?php echo $row['pet']; ?> 
                  </div>
                </li>
              <?php
              }
            ?>
          </ul>
        </div>
      </li>
      <li><!-- parking filter -->
        <div class="list-group testch">
          <label for="btn3">Parking</label>
          <input class="chk" type="checkbox" id="btn3">
          <ul>
            <?php
              $query = "
              SELECT DISTINCT(parking) FROM house_data ORDER BY parking ASC";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
              ?>
                <li>
                  <div class="list-group-item checkbox">
                    <input type="checkbox" class="filter_all parking" value="<?php echo $row['parking']; ?>">
                    <?php echo $row['parking']; ?> 
                  </div>
                </li>
              <?php
              }
            ?>
          </ul>
        </div>
      </li>
      <li><!-- purpose filter -->
        <div class="list-group testch">
          <label for="btn4">Purpose</label>
          <input class="chk" type="checkbox" id="btn4">
          <ul>
            <?php
              $query = "
              SELECT DISTINCT(purpose) FROM house_data ORDER BY purpose ASC";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
              ?>
                <li>
                  <div class="list-group-item checkbox">
                    <input type="checkbox" class="filter_all purpose" value="<?php echo $row['purpose']; ?>">
                    <?php echo $row['purpose']; ?> 
                  </div>
                </li>
              <?php
              }
            ?>
          </ul>
        </div>
      </li>
      <li><!-- rent filter -->
        <div class="list-group testch rt-flt">
          <label for="btn5">Rent</label>
          <input class="chk" type="checkbox" id="btn5">
          <ul>
            <li>
              <div class="list-group-item">
                <input type="hidden" id="min_price_hide" value="100000" />
                <input type="hidden" id="max_price_hide" value="800000" />
                <p id="price_show">Rs.100000 - Rs.800000</p>
                <div id="price_range"></div>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!--<li class="dort">
        <select id="sorting" class="sorting">
          <option value="" disabled selected hidden>Sort by</option>
          <option value="default">Default</option>
          <option value="1" class="sorting">Price: Low to high</option>
          <option value="high">Price: High to low</option>
        </select>
        <p><i class="las la-filter"></i></p>
      </li>-->
    </ul>
  </div>

  <div class="house-body">
    <div class="row filter_data">
      
    </div>
  </div>
  <!--<div class="flat-body">
    <div class="row">
      <div class="col-md-3">
        <div class="flat-card">
          <span class="wish-icon"><i class="far fa-heart"></i></span>
          <a href="singleflat.php">
            <img src="images/flat1.jpg" alt="">
            <div class="flat-brief">
              <p><span class="flat-list-tag">House</span></p>
              <span class="side-border"></span>
              <span class="price"><p>Rs. 90000 / mo</p></span>
              <span class="location"><p>Gapali, Suryebinayak, Bhaktapur</p></span>
              <small>Listed by Owner Name</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>-->
</section>

<?php
  require ('include/footer.php');
?>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery-ui.js"></script>

<script>
        $(document).ready(function() {
 
            filter_data();
 
            function filter_data() {
                $('.filter_data');
                var action = 'fetch_data';
                var minimum_price = $('#min_price_hide').val();
                var maximum_price = $('#max_price_hide').val();
                var location = get_filter('location');
                var floor = get_filter('floor');
                var room = get_filter('room');
                var pet = get_filter('pet');
                var parking = get_filter('parking');
                var purpose = get_filter('purpose');
                var sorting = $('#sorting').val();
                $.ajax({
                    url: "fetchdata/fetch_housedata.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        location: location,
                        room: room,
                        pet: pet,
                        parking: parking,
                        purpose: purpose,
                        sorting: sorting
                    },
                    success: function(data) {
                      console.log(data.length)
                        $('.filter_data').html(data);
                    }
                });
            }
 
            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }
 
            $('.filter_all').click(function() {
                filter_data();
            });
 
            $('#price_range').slider({
                range: true,
                min: 100000,
                max: 800000,
                values: [100000, 800000],
                step: 5000,
                stop: function(event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#min_price_hide').val(ui.values[0]);
                    $('#max_price_hide').val(ui.values[1]);
                    filter_data();
                }
            });
 
        });
    </script>
</body>
</html>