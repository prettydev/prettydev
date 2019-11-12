<?php
include("payment.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>The Christmas Drive In - Home Alone 2</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/modern-business.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- For the modal popup -->
<link href="location.css" rel="stylesheet" type="text/css">
<link href="css/media.css" rel="stylesheet">

<!-- payment form -->
<script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
<style>
html, body.skipton {
    background: #fff;
	margin-top: 74px;
}
@media screen and (max-width: 767px) {
	margin-top: 0 !important;
}

</style>
</head>

<body class="skipton">

<!-- modal form  ->
    <!-- kdaviesnz -->
<?php
    // id exampleModalLong
    include("paymentform.html.php");
    ?>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('images/head-bg.png');" role="navigation">
  <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="row headerbg" >
     <div class="col-md-4 col-xs-1" class="navbar-header">
      <button type="button" class="navbar-toggle display_nonn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="col-md-4 col-xs-5"> <a class="navbar-brand" href="index.html" style=""><img  src="images/logo.png" style="padding: 10px; width: 350px;" alt="" /></a></div>
    <div class="col-md-4 col-xs-5">
      <div style="width: 100%;" > <a href="https://christmasmovieexperience.com/newbuild/#movies" class="buytickets smooth-goto" ><img src="images/ticket-logo.png"/></a></div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling --> 
    
  </div>
  
  <!-- /.navbar-collapse -->
  
  </div>
  
  <!-- /.container --> 
  
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide innercarouselheight" style="display:none;"> 
  <!-- Indicators --> 
  <!-- Wrapper for slides -->
  <div class="carousel-inner agile2" style="display:none;">
    <div class="item active">
      <div class="fill" style="background-image:url('images/locationbg.jpg');"></div>
      <div class="carousel-caption innercarousel-caption">
        <h2 class="font-me">Manchester Christmas Drive In</h2>
        <p class="font-crimson-body-text-white"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>AJ Bell Stadium, 1 Stadium Way, Barton-upon-Irwell, Salford, M30 7EY</p>
        <p class="font-crimson-body-text-white"><span><i class="fa fa-clock-o" aria-hidden="true"></span></i>20th December 2018</p>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<div class="container" id="festival1"> 
  
  <!-- Notices --> 
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
      <h1 style="display:none;" class="page-header font-me"> The Sessions </h1>
    </div>
    <div class="col-md-12 font-me">
      <?php

               // kdaviesnz
               $tickets = array(
                  array("location" => "Home Alone 2", "time"=>"1.30PM", "address"=>"AJ Bell Stadium, 1 Stadium Way, Barton-upon-Irwell, Salford, M30 7EY", "dates" => "3rd November", "img"=>"images/l1.jpg"),

                  // array("location" => "Evening Session", "time"=>"6.30PM to 11:30PM", "address"=>"", "dates" => "3rd November", "img"=>"images/l2.jpg"),


               );
			foreach ($tickets as $ticket) {
                  // kdaviesnz
                  ?>
      <div class="row sessionticket font-me">
        <div class="col-md-5 col-sm-12">
          <div class="pad-left40 ">
            <h4><?php echo $ticket["location"]; ?></h4>
            <h5><?php echo $ticket["dates"]; ?> | <?php echo $ticket["time"]; ?> </h5>
            <img src="homealone2.jpg" class="img-responsive" />
            
          </div>
        </div>
        <div class="col-md-7 col-sm-12 align-rightbigscreen">
          
          <div class="pad-right4">
            <h2 class="mink-title" style="text-align:left;">Please Confirm Your Booking Details</h2>
			<div class="min-section">
            <ul>
            	<li><span>Movie</span>Mome Alone 2</li>
                <li><span>Date</span>20th December 2018</li>
                <li><span>Time</span>1.30PM</li>
            </ul>
            </div>
            <div class="min-section">
            <h3>Movie Location</h3>
            <ul>
            	<li><span>Loccation</span> AJ Bell Stadium <br/>
1 Stadium Way<br/>
Barton-upon-Irwell<br/>
Salford<br/>
M30 7EY<br/>
(sat nav M30 7LJ)
</li>
            </ul>
            </div>
            <div class="min-section">
            <ul>
            	<li style="font-size:14px; font-style:normal;"><span style="color:crimson;">Important information</span> You only require 1 ticket per car for unlimited guests.Please arrive 45 minutes early.</li>
            </ul>
            </div>
            <form class="form-inline formmargin" action="">
              <div class="form-group">
                <select class="form-control" id="ticketType"  onChange="setPrice(event)">
                  <!--<option value="12">Standard Ticket - £12 </option>-->
                  <option value="26">Ticket - £26 </option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control maxwidth75 " id="numberoftickets" min="1" max="1" onChange="setNumberOfTickets(event)" placeholder="1">
              </div>
              <button data-price="12" data-time="<?php echo $ticket["time"]; ?>" data-dates="<?php echo $ticket["dates"]; ?>" data-location="<?php echo $ticket["location"]; ?>" data-address="<?php echo $ticket["address"]; ?>" data-toggle="modal" data-target="#exampleModalLong" onclick="buyTicket(event)" class="btn btn-default buyticket">Buy Ticket</button>
            </form>
          </div>
        </div>
      </div>
      <?php
               }
               ?>
    </div>
    <?php /*?><div class="col-md-3">
      <ul class="ticketdetails">
        <li>
          <h4 class="font-me">Every Ticket Includes</h4>
          <ul class="ticketinclusionhighlight">
            <li  class="font-crimson-body-text-black">Festival Access</li>
            <li  class="font-crimson-body-text-black">Free Barnum Cocktail</li>
            <li  class="font-crimson-body-text-black">Huge Selection Of Alcohol</li>
            <li  class="font-crimson-body-text-black">Street Food </li>
            <li  class="font-crimson-body-text-black">Seats Available But Not Guaranteed</li>
            <li  class="font-crimson-body-text-black">Live Sing-a-long Experience</li>
          </ul>
        </li>
        <li>
          <h4 class="font-me">Vip upgrades include</h4>
          <ul class="ticketinclusionhighlight">
            <li  class="font-crimson-body-text-black">Festival Access</li>
            <li  class="font-crimson-body-text-black">Free Barnum Cocktail</li>
            <li  class="font-crimson-body-text-black">VIP Dessert</li>
            <li  class="font-crimson-body-text-black">Huge Selection Of Alcohol</li>
            <li  class="font-crimson-body-text-black">Street Food </li>
            <li  class="font-crimson-body-text-black">Seats Available But Not Guaranteed</li>
            <li  class="font-crimson-body-text-black">Live Sing-a-long Experience</li>
            <li  class="font-crimson-body-text-black">VIP wristband</li>
            <li  class="font-crimson-body-text-black">2 Extra VIP Drink Tokens</li>
            <li  class="font-crimson-body-text-black">Access To VIP bar</li>
          </ul>
        </li>
      </ul>
    </div><?php */?>
  </div>
  <!-- /.row --> 
</div>
<!-- ticketsection -->
<?php /*?><section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.5337524612887!2d-2.9705920841593354!3d53.405279829991414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5a7306f1ca6635c!2sLutyens+Crypt!5e0!3m2!1sen!2suk!4v1530187467075" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section><?php */?>
<?php /*?><footer class="innerfootet">
  <div class="container">
  <div class="row">
    <div class="col-md-4 footerlogo"> <img src="images/logo.png" /> </div>
    <div class="col-md-4">
      <div class="socialwrap"> <a class="btn socialbtnfooter social-facebook" href="https://www.facebook.com/thegreatestfestival/"><i class="fa fa-facebook"></i></a> <a class="btn socialbtnfooter social-facebook" href="https://www.instagram.com/thegreatestfestival"><i class="fa fa-instagram"></i></a> <a class="btn socialbtnfooter social-facebook" href="https://twitter.com/GreatestFest"><i class="fa fa-twitter"></i></a> </div>
    </div>
    <div class="col-md-4">
      <div class="love font-me"><span>Greatest  Productions  UK</span></div>
    </div>
  </div>
</footer><?php */?>
<div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 szsss"><a href="https://christmasmovieexperience.com/newbuild/#movies" class="buy smooth-goto"><img src="images/ticket-logo.png" alt=""></a></div>
            <div class="col-lg-8 col-md-8 col-sm-12 text-center"><button type="button" class="btn btn-info btn-lg dfcd" data-toggle="modal" data-target="#myModal">Terms and conditions</button><p>2018 Christmas Drive-In™ is used under licence from Z100 Entertainment Inc</p></div>
            
          </div>
        </div>
      </div>	  
	  <!-- Modal -->
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
<!-- /.container --> 

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
