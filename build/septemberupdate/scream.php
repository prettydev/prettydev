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

    <title>Scream - Horror Night Screening Glasgow</title>

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

<body class="skipton">

    <!-- modal form  ->
    <!-- kdaviesnz -->
    <?php
    // id exampleModalLong
    include("paymentform.html.php");
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top nav-agile" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img  src="images/logo.png" style="padding: 15px;

width: 212px;" alt="" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right custom-font-me">
                    <li>
                        <a href="#festival" class="pad-right66 pad-top25 forscroll">The Experience</a>
                    </li>
                    <li>
                        <a href="#faq" class="pad-right66 pad-top25 forscroll">FAQ</a>
                    </li>
               <li>
                        <a href="https://horrornights.co.uk/Contact%20us.html" class="pad-right166 pad-top25">Get In Contact</a>
                    </li>
               <li>
               <a href="#tickets" class="buytickets smooth-goto" >Buy Tickets</a>
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
        <div class="carousel-inner agile2">
            <div class="item active">
                <div class="fill" style="background-image:url('images/scream.jpg');"></div>
                <div class="carousel-caption innercarousel-caption">
                    <h2 class="font-me">Scream</h2>
               <!-- <p class="font-crimson-body-text-white"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Liverpool  Crypt Hall - Mount Pleasant Liverpool L3 5TQ</p> -->
               <p class="font-crimson-body-text-white"><span>26th October - 6.30 PM</p>
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
                <h1 class="page-header font-me">
                  Event Information
                </h1>
         </div>
           <div class="col-md-9">


               <?php

               // kdaviesnz
               $tickets = array(
                  array("location" => "Scream", "time"=>"9.30 PM", "address"=>"23 Clydebrae Street Glasgow G51 2AJ", "dates" => "27th October", "img"=>"images/l1.jpg")

                   //array("location" => "Evening Session", "time"=>"6.30PM to 11:30PM", "address"=>"Crypt Hall - Mount Pleasant Liverpool L3 5TQ", "dates" => "3rd November", "img"=>"images/l2.jpg"),


               );


               foreach ($tickets as $ticket) {
                  // kdaviesnz
                  ?>
                   <div class="row sessionticket">
                       <div class="col-md-12 col-sm-12 ">
                           <div class="pad-left40 ">
                               <h4 class="font-me"><?php echo $ticket["location"]; ?></h4>
                               <h5><?php echo $ticket["dates"]; ?>    |    <?php echo $ticket["time"]; ?> </h5>
                               <div class="session-content">
                              
								   <p>An abandoned warehouse with a gruesome past will become the setting for a movie screening unlike anything you will ever experience down your local multiplex. </p>
                               <p>Entering through a secret maze you will come face to face with terrifying creatures who will unleash their own style of hospitality on each and every visitor making sure you you go home with lasting memories …. should you survive.</p>
                               <p>Once inside and safely seated we don’t advise you get to comfortable as things have a habit of going bump in the night just when you least expect it.</p>
                               
                               <p>Doors Open: 6PM</p>
                             </div>

                               <hr/>
                           </div>
                       </div>
                       <div class="col-md-12 col-sm-12">
                           <div class="pad-left40">
                               <form class="form-inline formmargin" action="">
                                   <div class="form-group">
                                       <select class="form-control" id="ticketType"  onChange="setPrice(event)">
                                           <option value="1">Standard Ticket - £12 </option>
                                           <!--<option value="26">VIP Ticket - £26 </option>-->
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
            <h4 class="font-me">Every Ticket Includes</h4>

            <ul class="ticketinclusionhighlight">
            <li  class="font-crimson-body-text-black">Maze Access</li>
            <li  class="font-crimson-body-text-black">Movie Screening</li>
            <li  class="font-crimson-body-text-black">Access To Bar</li>
            <li  class="font-crimson-body-text-black">Access To Street Food</li>
            <li  class="font-crimson-body-text-black mar-top-20 bold-text">Doors Open - 5.30PM</li>
            <li  class="font-crimson-body-text-black bold-text">Certification - 15</li>
            <li  class="font-crimson-body-text-black"><a href="https://horrornights.co.uk/index.html#faq">Check our FAQ</a></li>
            
            </ul>
            </li>
            <!-- <li>
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
            </li> -->
            </ul>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- ticketsection -->
      <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4478.166129383448!2d-4.3091572698145315!3d55.86122522232987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x488845df5c5704db%3A0x774199dfe967c4c0!2s23+Clydebrae+Street%2C+Glasgow!3m2!1d55.8612253!2d-4.3047799!4m5!1s0x488845df5c5704db%3A0x774199dfe967c4c0!2s23+Clydebrae+St%2C+Glasgow+G51+2AJ!3m2!1d55.8612253!2d-4.3047799!5e0!3m2!1sen!2suk!4v1536673044299" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>

<footer class="innerfootet">
   <div class="container">
      <div class="row">
         <div class="col-md-4 footerlogo">
         <img src="images/logo.png" />
         </div>
<div class="col-md-4">
         <div class="socialwrap">
         <a class="btn socialbtnfooter social-facebook" href="https://www.facebook.com/HorrorNights.co.uk"><i class="fa fa-facebook"></i></a>
         </div>
      </div>
      <div class="col-md-4">
         <div class="love font-me"><span>Horror Nights UK</span></div>
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
