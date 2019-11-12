<?php
/**
kdaviesnz March 2018
Locations page
Changes:
Changed from .html to .php
Added modal payment form (payment.php)
Added notices section.
Tickets now defined in an array.
Changed "Buy Tickets" link so that when clicked they open the modal payment form.
Changing price and number of tickets sets matching fields in the modal payment form.
 */
// kdaviesnz
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

    <title>VIVA PROSECCO FESTIVAL</title>

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

    <!-- payment form -->
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>

</head>

<body>

    <!-- modal form  ->
    <!-- kdaviesnz -->
    <?php
    // id exampleModalLong
    include("paymentform.html.php");
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="VIVA PROSECCO FESTIVAL LOGO" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html#festival" class="pad-right66 pad-top25">The &nbsp;  Festival</a>
                    </li>
                    <li>
                        <a href="index.html#location" class="pad-right66 pad-top25">Locations</a>
                    </li>
                    <li>
                        <a href="index.html#faq" class="pad-right66 pad-top25">FAQ</a>
                    </li>
					<li>
                        <a href="#" class="pad-right166 pad-top25">Help</a>
                    </li>
					<li>
					<a href="#" class="buytickets">Buy Tickets</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide innercarouselheight">
        <!-- Indicators -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/locationbg.jpg');"></div>
                <div class="carousel-caption innercarousel-caption">
                    <h2>London</h2>
					<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>640 Main street london 321 w12</p>
					<p><span><i class="fa fa-clock-o" aria-hidden="true"></span></i>17-24 July 2018</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container" id="festival">

        <!-- Notices -->
        <!-- kdaviesnz -->
        <div class="section">


            <div class="container">

                <div class="row">

				    <?php
				    if(isset($message)) { ?>

                        <div class="alert alert-success">

                            <strong>Congratulations!</strong> <?php echo $message; ?>

                        </div>

					    <?php
				    }

				    if(isset($error)) { ?>

                        <div class="alert alert-danger">

						    <?php echo $error; ?>

                        </div>

					    <?php
				    }
				    ?>

                </div>

            </div>

        </div>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                  The Sessions
                </h1>
			</div>
           <div class="col-md-9">


               <?php

               // kdaviesnz
               $tickets = array(
	               array("location" => "London friday evening", "time"=>"06:30PM to 11:30PM", "address"=>"The Glasgow Shed - 23 Clydebrae Street, Glasgow, G51 2AJ", "dates" => "27th July", "img"=>"images/l1.jpg"),

                   array("location" => "Londong friday evening", "time"=>"06:30PM to 11:30PM", "address"=>"The Glasgow Shed - 23 Clydebrae Street, Ipswich, G51 2AJ", "dates" => "27th July", "img"=>"images/l2.jpg"),

	                array("location" => "London friday evening", "time"=>"06:30PM to 11:30PM","address"=>"The Glasgow Shed - 23 Clydebrae Street, Glasgow, G51 2AJ", "dates" => "27th July", "img"=>"images/l3.jpg"),

                   array("location" => "London friday evening", "time"=>"06:30PM to 11:30PM","address"=>"The Glasgow Shed - 23 Clydebrae Street, Ipswich, G51 2AJ", "dates" => "27th July", "img"=>"images/l4.jpg"),

                   array("location" => "London friday evening", "time"=>"06:30PM to 11:30PM","address"=>"The Glasgow Shed - 23 Clydebrae Street, Glasgow, G51 2AJ", "dates" => "27th July", "img"=>"images/l1.jpg"),

               );


               foreach ($tickets as $ticket) {
	               // kdaviesnz
	               ?>
                   <div class="row sessionticket">
                       <div class="col-md-5 col-sm-12 break1024 ">
                           <div class="pad-left40 ">
                               <h4><?php echo $ticket["location"]; ?></h4>
                               <h5><?php echo $ticket["dates"]; ?>    |    <?php echo $ticket["time"]; ?> </h5>
                           </div>
                       </div>
                       <div class="col-md-7 col-sm-12 break1024 align-rightbigscreen">
                           <div class="pad-right40">
                               <form class="form-inline formmargin" action="">
                                   <div class="form-group">
                                       <select class="form-control" id="ticketType"  onChange="setPrice(event)">
                                           <option value="1">Standard Ticket - £12 </option>
                                           <option value="22">Delux Ticket - £22 </option>
                                           <option value="32">Super Delux Ticket - £32 </option>
                                           <option value="42">Premium Ticket - £42 </option>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                       <input type="number" class="form-control maxwidth75 " id="numberoftickets" min="1" max="10" onChange="setNumberOfTickets(event)" placeholder="2">
                                   </div>
                                   <button data-price="12" data-time="<?php echo $ticket["time"]; ?>" data-dates="<?php echo $ticket["dates"]; ?>" data-location="<?php echo $ticket["location"]; ?>" data-address="<?php echo $ticket["address"]; ?>" data-toggle="modal" data-target="#exampleModalLong" onclick="buyTicket(event)" class="btn btn-default buyticket">Buy Tickets</button>
                               </form>
                           </div>
                       </div>
                   </div>
	               <?php
               }
               ?>


            </div>
          <div class="col-md-3">
                <ul class="ticketdetails">
				<li>
				<h4>Every Ticket Includes</h4>
				
				<ul class="ticketinclusionhighlight">
				<li>Festival Access</li>
				<li>Free glass of prosecco on arrival</li>
				<li>Your very own prosecco event glass</li>
				<li>Free festival guide</li>
				<li>Free festival guide</li>
				<li>Access to street food traders</li>
				<li>Seats available but not guaranteed</li>
				<li>Live music on stage</li>
				</ul>
				
				</li>
				<li>
				<h4>Vip upgrades include</h4>
				<ul class="ticketinclusionhighlight">
				<li>Fastrack VIP festival access</li>
				<li>Free glass of prosecco on arrival</li>
				<li>Your very own prosecco event glass</li>
				<li>Free festival guide</li>
				<li>Access to main bars</li>
				<li>Access to street food traders</li>
				<li>Guaranteed seats in VIP area</li>
				<li>Live music on stage</li>
				<li>Snacks served to the table</li>
				<li>VIP wristband</li>
				<li>Drinks tokens for 2 glasses of prosecco</li>
				<li>Access to VIP bar</li>
				</ul>
				</li>
				</ul>
            </div>
        </div>
        <!-- /.row -->
		</div>
		<!-- ticketsection -->
		<section class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.378302589326!2d-0.1367489845417387!3d51.487924979631906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604e40f499d79%3A0xaf1bd15137f1d724!2sSt+Georges+Nursing+Home%2C+61+St.George&#39;s+Square%2C+Pimlico%2C+London+SW1V+3QR%2C+UK!5e0!3m2!1sen!2sin!4v1520506985336" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
		
<footer class="innerfootet">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footerlogo">
			<img src="images/logo.png" />
			</div>
			<div class="col-md-4">
			<div class="socialwrap">
			<a class="btn socialbtnfooter social-facebook" href="#"><i class="fa fa-facebook"></i></a>
			<a class="btn socialbtnfooter social-facebook" href="#"><i class="fa fa-instagram"></i></a>
			<a class="btn socialbtnfooter social-facebook" href="#"><i class="fa fa-twitter"></i></a>
			</div>
			</div>
			<div class="col-md-4">
			<div class="love"><span>Built with</span><span><i class="fa fa-heart"></i></span><span>in the uk</span></div>
			</div>
		</div>
	</div>
</footer>
    
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
