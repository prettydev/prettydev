<?php

include("payment.php");
?>
<!DOCTYPE html>
<html lang="en" style="background:#FFF;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Elf - Christmas Drive-in Manchester 2018</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/modern-business.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- For the modal popup -->
<link href="location.css" rel="stylesheet" type="text/css">

<!-- payment form -->
<script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>

<style>
@media screen and (min-width: 1000px) {
    .mobile-logo-p {
		display:none;
    }
}
</style>
</head>

<body class="skipton" style="background:#FFF;">

<!-- modal form  ->
    <!-- kdaviesnz -->
<?php
    // id exampleModalLong
    include("paymentform.html.php");
    ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top nav-agile" role="navigation" style="background-image:url(images/head-bg.png);">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
      </button>-->
      <a style="width:60%;" class="navbar-brand mobile-logo-p" href="https://christmasmovieexperience.com/"><img  src="images/logo.png" style="padding: 15px; width: 190px !important; float:right;" alt="" /></a>
      <div class="col-md-4 col-xs-5" style="float:right;">
        
      </div>
      
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" > <a style="width:60%;" class="navbar-brand" href="https://christmasmovieexperience.com/"><img  src="images/logo.png" style="padding: 15px; width: 325px; float:right;" alt="" /></a>
      <div class="col-md-4 col-xs-5" style="float:right;">
        <div style="width: 100%;"> <a href="https://christmasmovieexperience.com/" class="buytickets smooth-goto"><img src="images/ticket-logo.png"></a></div>
      </div>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide innercarouselheight"> 
  <!-- Indicators -->
  <div class="carousel-inner agile2">
    <div class="item active">
      <div class="fill" style="background-image:url('images/elfbanner.jpg');"></div>
      <div class="carousel-caption innercarousel-caption">
        <h2 class="font-me" style="font-weight:bold;">Elf</h2>
        <p class="font-crimson-body-text-white"><span style="font-weight:bold;">23rd December - 6.00 PM</span></p>
      </div>
    </div>
  </div>
</header>
<!-- Page Content -->
<div class="container" id="festival1" style="background:#FFF;"> 
  <!-- kdaviesnz -->
  <div class="section">
    <div class="container">
      <div class="row">
        <?php
                if(isset($message)) { ?>
        <div class="alert alert-success"> <strong>Congratulations!</strong> <?php echo $message; ?> </div>
        <?php
                }
                if(isset($error)) { ?>
        <div class="alert alert-danger"> <?php echo $error; ?> </div>
        <?php
                }
                ?>
      </div>
    </div>
  </div>
  <!-- Marketing Icons Section -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header font-me"> Event Information </h1>
    </div>
    <div class="col-md-12">
      <?php

               // kdaviesnz
               $tickets = array(
                  array("location" => "Elf", "time"=>"6.00 PM", "address"=>"AJ Bell Stadium, 1 Stadium Way, Barton-Upon-Irwell, Salford M30 7EY", "dates" => "23rd December", "img"=>"images/l1.jpg")

                   //array("location" => "Evening Session", "time"=>"6.30PM to 11:30PM", "address"=>"", "dates" => "", "img"=>"images/l2.jpg"),


               );
               foreach ($tickets as $ticket) {
                  // kdaviesnz
                  ?>
      <div class="row sessionticket">
        <div class="col-md-12 col-sm-12 ">
          <div class="pad-left40 ">
            <h4 class="font-me" style="font-size:30px;">
              <?php  echo $ticket["location"]; ?>
            </h4>
            <h5 style="margin-bottom:20px; font-size:20px;">
              <?php  echo $ticket["dates"]; ?>
              |
              <?php  echo $ticket["time"]; ?>
            </h5>
            <div class="session-content" style="font-size:20px; line-height:30px;">
              <p>This Holiday season join us for at Manchester's biggest Christmas Drive In Movie experience featuring the world’s largest L.E.D screen, festive treats and our massive car-aoke sing-a-long!</p>
              <p>Soak up the festive atmosphere and enjoy tasty treats along with mulled wine from our Christmas cocktail bar! </p>
              <ul style="list-style: disc; padding-left:35px;">
                <li>See the best Christmas movies on our huge L.E.D screen</li>
                <li>Festive food and drinks</li>
                <li>Car-aoke sing-a-long</li>
                <li>Amazing Holiday fun</li>
              </ul>
              <h2>Movie Location</h2>
              <p>AJ Bell Stadium <br>
                1 Stadium Way<br>
                Barton-upon-Irwell<br>
                Salford<br>
                M30 7EY<br>
                (sat nav M30 7LJ)
              <p>
              <p><strong>Movie Start Time:</strong> 6.00PM<br>
                <strong>Gates Open:</strong> 5.00PM</p>
              <strong>Important information<br>
              You only require 1 ticket per car for unlimited guests.Please arrive 45 minutes early.</strong> </div>
            <hr/>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="pad-left40">
            <form class="form-inline formmargin" action="">
              <div class="form-group">
                <select class="form-control" id="ticketType"  onChange="setPrice(event)">
                  <option value="1">Standard Ticket - £1 </option>
                  <!--<option value="26">VIP Ticket - £26 </option>-->
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control maxwidth75 " id="numberoftickets" min="1" max="10" onChange="setNumberOfTickets(event)" placeholder="2">
              </div>
              <button data-price="26" data-time="<?php echo $ticket["time"]; ?>" data-dates="<?php echo $ticket["dates"]; ?>" data-location="<?php echo $ticket["location"]; ?>" data-address="<?php echo $ticket["address"]; ?>" data-toggle="modal" data-target="#exampleModalLong" onclick="buyTicket(event)" class="btn btn-default buyticket">Buy Tickets</button>
            </form>
          </div>
        </div>
      </div>
      <?php
               }
               ?>
    </div>
  </div>
  <!-- /.row --> 
</div>
<!-- ticketsection --> 

<!-------- footer start here --------------->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="color:#FFFFFF;">
        <p  data-toggle="modal" data-target="#myModal" style="cursor:pointer;">Terms and conditions</p>
        <!--<a href="#tos" data-toggle="modal">Terms and conditions</a>-->
        <p>2018 Christmas Drive-In™ is used under licence from Z100 Entertainment Inc</p>
      </div>
    </div>
  </div>
</div>


<!------- model pop up ------>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms and conditions</h4>
        </div>
        <div class="modal-body">
         <ul>
	<li>Voucher is valid for movie, date and time stated on voucher; subject to availability.</li>
	<li>Entrance: A</li>
	<li>Voucher is valid for one vehicle.</li>
	<li>Sound will be delivered via your FM car radio (or any handheld radio) , details of frequency will be provided on arrival.</li>
	<li>You must arrive 20 mins prior to the screening.</li>
	<li>Latecomers will not be admitted and no refunds will be offered.</li>
	<li>Spaces will be allocated on a first come first served basis.</li>
	<li>Food will be available for purchase from our authorized vendor, food options are subject to availability and change.</li>
	<li>You must comply with the road traffic act 1988. Ensuring every passenger has a seat belt.</li>
	<li>Alcohol is not permitted.</li>
	<li>4 x 4's and people carriers permitted and will be accommodated in a designated area.</li>
	<li>No vans, coaches or commercial vehicles permitted.</li>
	<li>No pets permitted (unless service dogs or reindeers).</li>
	<li>Toilet facilities available.</li>
	<li>Please ensure you wear warm clothing and outdoor shoes.</li>
	<li>Although we aim to start all movies at the listed times, delays may apply due the the nature of the event.</li>
    <li>Engines and lights must be switched off during the performance apart from when you are charging your battery (if required).</li>
	<li>For the enjoyment of everyone  you must remain in your car during the screening.</li>
	<li>Any scheduled character appearances are subject to change / cancellation.</li>
	<li>Should for any reason you need to leave the screening you will be provided with a contact telephone number to call for assistance.</li>
	<li>Inclement weather won't affect the screening.</li>
	<li>Vouchers must be surrendered for redemption; please print your voucher and bring along with you to avoid entry issues.</li>
	<li>Voucher is not exchangeable for cash.</li>
	<li>All vehicles must comply with the road traffic act 1988.</li>
	<li>Vehicles are parked at the risk of the owners.We do not accept any liability or be held responsible for any loss, damage to your property or for any collisions that may occur causing injury.</li>
	<li>You must follow the guidance of our marshals and parking attendants at all times.</li>
	<li>Images used for illustrative purposes only.</li>
</ul>
</ul>
</ul>
</ul>
</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- jQuery --> 
<script src="js/jquery.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Script to Activate the Carousel --> 
<script>

     $(document).on('ready', function() {

          $('.carousel').carousel({
              interval: 5000 //changes the speed
          })

          $('.panel-heading a').click(function () {
              $('.panel-heading').removeClass('active');

              //If the panel was open and would be closed by this click, do not active it
              if (!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
                  $(this).parents('.panel-heading').addClass('active');

          });

          $(document).on('click', 'a[href^="#"]', function (event) {
              event.preventDefault();

              $('html, body').animate({
                  scrollTop: $($.attr(this, 'href')).offset().top - 100
              }, 500);
          });

          $('ul.navbar-nav li a').click(function () {
              $('ul.navbar-nav li a').removeClass('active');
              $(this).addClass('active');

          });

      }

    </script> 
<script>
        // kdaviesnz $applicationID is defined in config.php
        const applicationID = '<?php echo $applicationID; ?>';
    </script> 
<script type="text/javascript" src="js/paymentform.js"></script> 
<script>
   // The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 400);
  }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);
   </script>
</body>
</html>
