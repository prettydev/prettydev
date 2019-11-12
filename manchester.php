<?php include('mobile.php'); 
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Manchester's biggest Christmas drive-in movie experience ">
<meta name="author" content="">
<title>Manchester Christmas Drive-In Movie Experience 2018</title>

<!-- Bootstrap Core CSS -->

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->

<link href="css/modern-business.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">

<!-- Custom Fonts -->

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    
    <style>
@media screen and (min-width: 1000px) {
    .mobile-logo-p {
		display:none;
    }
}
#testModal .modal-dialog{
	top: 30vh;
    width: 50vw;
    margin: auto;
}

#testModal img{
    width: 50%;
}
#testModal .modal-content{
  text-align: center;
  padding: 5%;
}
</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87728612-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-87728612-1');
</script>
<script>
    var geotargetlyredirect1543439279039 = document.createElement('script');
    geotargetlyredirect1543439279039.setAttribute('type','text/javascript');
    geotargetlyredirect1543439279039.async = 1;
    geotargetlyredirect1543439279039.setAttribute('src', '//geotargetly-1a441.appspot.com/georedirect?id=-LSR8aC1rT3u_PxSER_s&refurl='+document.referrer);
    document.getElementsByTagName('head')[0].appendChild(geotargetlyredirect1543439279039);
</script>
</head>

<body>

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

<header  style="margin-top: 60px;" id="myCarousel" class="carousel slide"> 
  
  <!-- Indicators --> 
  
  <!-- Wrapper for slides -->
  
  <div class="carousel-inner">
    <div class="item active">
      <div class="fill" >
      <?php if( $detect->isiOS() ){
 
			?>
<div class="header">
  <div class="overlay">
    <div class="jumbotron" id="header1">
      <h1 style="margin:25px 0px; color:transparent;">hello</h1>
    </div>
  </div>
</div> 
            <?php
		   
		}else{
		?>	
			<video width="100%" height="auto"  controls>
          <source src="https://christmasmovieexperience.com/videobg.mp4" type="video/mp4">
          <source src="Christmas.ogg" type="video/ogg">
          Your browser does not support HTML5 video. </video>
		<?php	
		}
		?>
        
      </div>
    </div>
  </div>
</header>
<div id="movies" class="xdd">
<div class=" selectday" style="background-image: url('images/select-day-bg.png');">
  <div class="container">
    <h2 style="text-align: center; color: #fff;">Choose which day you would like to visit</h2>
    <div class="visit-day" style="margin-top: 25px; margin-bottom: 25px;">
      <ul  >
        <li ><a data-toggle="pill" href="#mink">December 20th</a></li>
        <li ><a data-toggle="pill" href="#home">December 21st</a></li>
        <li><a data-toggle="pill" href="#menu1">December 22nd</a></li>
        <li><a data-toggle="pill" href="#menu2">December 23rd</a></li>
      </ul>
      <br/>
      <p></p>
    </div>
  </div>
</div >
<div >
  <div >
    <div class="tab-content">
      <div id="mink" class="tab-pane fade in active">
        <div style="background-image: url('images/selected-date.png');" id="selected-day" class=" ">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-right text-portion dx">
            <p>Date chosen</p>
            <p class="choosen-date">December 20th</p>
          </div>
          <div class="arrow col-md-2 col-xs-12" style="text-align:center;"><a href="#"><img src="images/arrow.png" alt=""/> </a></div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-left text-portion dx">
            <p class="desc">Movies and showtimes for<br/>
              the date are shown below</p>
          </div>
        </div>
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="mink" class="tab-pane fade in active">
                <div id="selected-day" class=" ">
                  <p class="xdn" style="text-align: center; font-style: italic; color: green; text-transform: capitalize; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Your Ticket Includes Entry for UNLIMITED Guests Per Car</p>
                  <div class="col-md-2"></div>
                  <div class="col-md-3 col-xs-12 cmss">
                    <div class="imgborder"><img src="images/homealone2.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">1:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="homealone2.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12 cmss">
                    <div class="imgborder"><img src="images/homealone.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">6:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="thuhomealone.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12 cmss">
                    <div class="imgborder"><img src="images/elf.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">9:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="thuelf.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="home" class="tab-pane fade in">
        <div style="background-image: url('images/selected-date.png');" id="selected-day" class=" ">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right text-portion">
            <p>Date chosen</p>
            <p class="choosen-date">December 21st</p>
          </div>
          <div class="arrow col-md-2" style="text-align:center;"><a href="#"><img src="images/arrow.png" alt=""/> </a></div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left text-portion">
            <p class="desc">Movies and showtimes for<br/>
              the date are shown below</p>
          </div>
        </div>
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div id="selected-day" class=" ">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: capitalize; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Your Ticket Includes Entry for UNLIMITED Guests Per Car</p>
                  <div class="col-md-2"></div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/elf.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">1:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="frielf.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/elf.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">6:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="frielfsix.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/homealone.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">9:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="frihomealone.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="menu1" class="tab-pane fade">
        <div style="background-image: url('images/selected-date.png');" id="selected-day" class=" ">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right text-portion">
            <p>Date chosen</p>
            <p class="choosen-date">December 22nd</p>
          </div>
          <div class="arrow col-md-2"><a href="#"><img src="images/arrow.png" alt=""/> </a></div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-left text-portion">
            <p class="desc">Movies and showtimes for<br/>
              the date are shown below</p>
          </div>
        </div>
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="menu1" class="tab-pane fade in active">
                <div id="selected-day" class="row ">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: capitalize; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Your Ticket Includes Entry for UNLIMITED Guests Per Car</p>
                  <div class="col-md-2"></div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/elf.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">8:00 PM SHOWING</p>
                      <p class="moviebutton"><a href="oneelf.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    
                  </div>
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="menu2" class="tab-pane fade">
        <div style="background-image: url('images/selected-date.png');" id="selected-day" class="row ">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right text-portion">
            <p>Date chosen</p>
            <p class="choosen-date">December 23rd</p>
          </div>
          <div class="arrow col-md-2"><a href="#"><img src="images/arrow.png" alt=""/> </a></div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-left text-portion">
            <p class="desc">Movies and showtimes for<br/>
              the date are shown below</p>
          </div>
        </div>
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="menu2" class="tab-pane fade in active">
                <div id="selected-day" class="row ">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: capitalize; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Your Ticket Includes Entry for UNLIMITED Guests Per Car</p>
                  <div class="col-md-2"></div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/showman.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">1:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="showman.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/elf.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">6:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="theelf.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="imgborder"><img src="images/diehard.jpg"/>
                      <p style=" color: #000; text-align: center; font-size: 20px;">9:30 PM SHOWING</p>
                      <p class="moviebutton"><a href="diehard.php">BUY TICKETS NOW</a></p>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Page Content -->

<div class="container" id="festival">
  <div class="main-bubbly-bg"> </div>
  
  <!-- Marketing Icons Section -->
  
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header font-me-black"> THE WORLD'S BIGGEST CHRISTMAS DRIVE-IN </h1>
      <p class="festivalintro font-crimson-body-head">Huge L.E.D Screen - Festive Street Food - Christmas Cocktails</p>
    </div>
    <div class="container" id="blog-project">
      <div class="col-md-12"> 
        
        <!-- Project one-->
        
        <div class="row">
          <div class="col-md-12">
            <div class="panel-body peanalpad">
              <p class="font-crimson-body-text">This holiday season share the spirit of Christmas at Manchester’s biggest and most festive movie experience creating magical memories with family and friends. Our great value admission offer means you can bring unlimited guests with just ONE ticket!</p>
              <p class="font-crimson-body-text">Start your experience with a visit to the north pole bar then enjoy some yuletide treats from our street food kitchen. Rudolph's fire pit is the ideal place to toast giant marshmallows or pick up a luxury hot chocolate dusted with enchanted snow shavings. </p>
              <p class="font-crimson-body-text">Before the movie begins get ready to sing along with our giant In Car Karaoke then snuggle up ready to enjoy your movie on the biggest LED screen in the World!.</p>
              <img src="../images/gin.png" class="img-responsive center-block"> </div>
          </div>
        </div>
        
        <!-- /.row --> 
        
      </div>
    </div>
  </div>
</div>
<div >
<div class=" selectday" style="background-image: url('images/select-day-bg.png');">
  <div class="container">
    <div class="visit-day" style="margin-top: 25px; margin-bottom: 25px;">
      <ul  >
        <li ><a data-toggle="pill" href="#About">About</a></li>
        <li ><a data-toggle="pill" href="#Location">Location</a></li>
        <li><a data-toggle="pill" href="#FAQ">FAQ</a></li>
        <li><a data-toggle="pill" href="#Contact">Contact</a></li>
      </ul>
      <br/>
      <p></p>
    </div>
  </div>
</div >
<div >
  <div >
    <div class="tab-content minku-text">
      <div id="About" class="tab-pane fade in active">
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="About" class="tab-pane fade in active">
                <div id="selected-day" class=" " style="background-color:#cff6f1 ; padding-bottom:50px;">
                  <p style="text-align: center; font-style: italic; color: green; text-transform:uppercase !important; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">About </p>
                  <div class="col-md-8">
                    <p style="text-align:justify;">An annual seasonal mainstay, the Manchester Christmas Drive-In has become a time-honoured tradition, treating huge audiences to the best show in town! Boasting the world's largest LED screen, this unique cinematic experience is designed to accommodate cinema-goers of all ages and tastes. With a classic 1950s drive-in feel, this year's films are sure to evoke plenty of nostalgia. There's 90s classics Home Alone (at 6:30pm) and Home Alone 2: Lost In New York (at 1:30pm), as well as festive favourite Elf each evening at 9:30pm. Available for just £26, each ticket includes entry for one car and unlimited guests - ensuring the event offers value for money as well as superb Christmas entertainment. </p>

                   <!-- <p style="text-transform:capitalize !important;">For just £26 per car you will enjoy your favourite festive movie, take part in our onscreen fun and tuck into a tasty festive treats served by Santa's little elves.</p>

					<p style="text-transform:capitalize !important;">It’s time to get cosied up with everyone on your nice list and share the magic of Christmas together in our magical yuletide movie experience.</p>-->
										
                  </div>
                  <div class="col-md-4">
                    <div class="imgborder"><img src="images/aboutimg.jpg"/> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="Location" class="tab-pane fade in">
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="Location" class="tab-pane fade in active">
                <div id="selected-day" class="row " style="background-color:#cff6f1 ; padding-bottom:50px;">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: uppercase !important; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Location </p>
                  <div class="col-md-8">
                  <p>This year the Christmas Drive In takes place at the state of the art  AJ Bell Stadium just minutes from the Intu Trafford Centre.</p>
                   <p style=" margin-top: 30px;">AJ Bell Stadium<br/>
					1 Stadium Way<br/>
					Barton-upon-Irwell<br/>
					Salford<br/>
					M30 7EY<br/>
					(sat nav M30 7LJ)</p>
                  </div>
                  <div class="col-md-4">
                    <div class="imgborder"><img src="images/aboutimg.jpg"/> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="FAQ" class="tab-pane fade in">
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="FAQ" class="tab-pane fade in active">
                <div id="selected-day" class="row " style="background-color:#cff6f1 ; padding-bottom:50px;">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: uppercase !important; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">FAQ </p>
                  <div class="col-md-8">
                     <h3 style="text-transform:capitalize !important;">What is the Christmas Drive-In? </h3>
						<p>Christmas Drive-In is a fun family friendly event showing Christmas movies on a giant outdoor screen.</p>

						 <h3>Will I be able to hear the audio?</h3> 
						<p>All our audio is broadcast directly to your car via your FM radio using the special frequency we provide you with on arrival</p>

						 <h3>How much do tickets cost? </h3>
						<p>Tickets cost just £26 each with unlimited guests per car. Please remember to comply with the road safety act 1988 every passenger must have a seat belt.</p>

						 <h3>Can we dress up? </h3>
						<p>Sure you can, feel free to bring blankets, pillows and your favorite Christmas jumper</p>

						 <h3>Are there toilet facilities? </h3>
						<p>Yes we have toilets available for visitor use</p>

						 <h3>Can I bring food and drink?</h3>
						<p> Sure, you can bring your own food and non alcoholic drinks or enjoy treats from our Christmas food stands.</p>
</p>
                  </div>
                  <div class="col-md-4">
                    <div class="imgborder"><img src="images/aboutimg.jpg"/> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div id="Contact" class="tab-pane fade in">
        <div style="background-color:#cff6f1 ; padding-bottom:50px;">
          <div class="container">
            <div class="tab-content">
              <div id="Contact" class="tab-pane fade in active">
                <div id="selected-day" class="row " style="background-color:#cff6f1 ; padding-bottom:50px;">
                  <p style="text-align: center; font-style: italic; color: green; text-transform: uppercase !important; font-size: 25px; margin-bottom: 70px; margin-top: 70px; font-weight: bold;">Contact Us </p>
                  <div class="col-md-8">
                    <p style="">You can contact our customer support team by email at <a href="">eventteam@christmasmovieexperience.com</a> . Our Elf Support centre is open 9 - 5 daily ready to answer any of your questions!</p>
                  </div>
                  <div class="col-md-4">
                    <div class="imgborder"><img src="images/aboutimg.jpg"/> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- ticketsection --> 

<!--<section class="ticketsection" id="location">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tickethead">
        <h4 id="tickets" class="font-me">Tickets</h4>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/l1.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Dee Maxwell - LIVE</h4>
          <h5 class="">25th October - 7.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/deemaxwell.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/l2.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Nightmare On Elm Street</h4>
          <h5 class="">26th October - 6.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/nightmareonelmstreet.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/g2.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">The Conjuring Two</h4>
          <h5 class="">26th October - 9.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/conjuring2.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/l7.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Hocus Pocus</h4>
          <h5 class="">27th October - 1.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/hocuspocus.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/l4.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Ghostbusters</h4>
          <h5 class="">27th October - 6.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/ghostbusters.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/l5.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Scream</h4>
          <h5 class="">27th October - 9.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/scream.php">Buy Tickets</a></div>
      </div>
      <div class="col-md-3 col-sm-6 ticketblock">
        <div><img src="images/g10.jpg" alt="" class="w100" /></div>
        <div class="datewrap">
          <h4 class="font-me">Ghostbusters</h4>
          <h5 class="">28th October - 1.30 PM</h5>
        </div>
        <div class="bookticketwrap"><a href="https://horrornights.co.uk/ghostbustersfamily.php">Buy Tickets</a></div>
      </div>
    </div>
  </div>
</div>
</div>
</section>--> 

<!--FAQ --> 

<!--<section id="faq">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tickethead">
        <h4 class="font-me">Frequently Asked Questions</h4>
      </div>
      <div class="col-md-6 col-md-push-6 mbot20"> <img src="images/faqimg.jpg" alt="" class="img-responsive" /> </div>
      <div class="col-md-6 col-md-pull-6">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default agile">
            <div class="panel-heading active">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> What Is A Scare Cinema? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body font-crimson-body-text-white"> If you love Halloween, love movies and love to be scared then you will LOVE our scare cinema. Expect a great movie with some spooky surprises! </div>
            </div>
          </div>
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> Will I be really Scared? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> We hope so - It's all about Halloween fun! </div>
            </div>
          </div>
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Where Is The Cinema <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> The cinema is being held at a haunted warehouse just seconds away from the BBC HQ facing the SEC Hydro. It's super easy to access via bus, taxi, tube or car with plenty of parking around the area. </div>
            </div>
          </div>
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> Is Food And Drink Available? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> Yes we have a selection of street food for you to enjoy during your time at the festival. All our menus include vegetarian and vegan options. We also have a fully stocked Horror Bar </div>
            </div>
          </div>
          
         
          
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> What Should I Wear? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> The event is talking place in an old warehouse which can get cold. We recommend dressing with warm clothing and flat shoes. </div>
            </div>
          </div>
          
          
          
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"> Can children attend? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> We have 2 family friendly screenings which are suitable for older children. Still expect plenty of scares and fun with our characters. </div>
            </div>
          </div>
          
          
          
          <div class="panel panel-default agile">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"> I Can&rsquo;t Find My Ticket Email? <i class="glyphicon glyphicon-plus plus"></i> </a> </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body font-crimson-body-text-white"> Please check your spam folder as sometimes tickets can end up in the wrong folder. If you have accidently deleted them or can’t find them in your spam inbox please message us using Facebook at https://www.facebook.com/HorrorNights.co.uk </div>
            </div>
          </div>
          
        
          
        </div>
      </div>
    </div>
  </div>
</section>--> 
<!--<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 footerlogo"> <img src="images/logo.png" width="250px"/> </div>
      <div class="col-md-4">
        <div class="socialwrap"> <a class="btn socialbtnfooter social-facebook" href="https://www.facebook.com/HorrorNights.co.uk"><i class="fa fa-facebook"></i></a> </div>
      </div>
      <div class="col-md-4">
        <div class="love font-me"><span>Greatest  Productions  UK</span></div>
      </div>
    </div>
  </div>
</footer>-->
<div class="clearfix"></div>
<!--<div id="disney" style="background-image: url('images/disneyback.jpg');">-->
<!--	<div class="container">-->
<!--        <h2 style="text-align: center; color: #000;">Win A Magical Trip To Disneyland Paris</h2>-->
<!--        <div class="col-lg-4 col-md-4 col-sm-12">-->
<!--        	<img src="images/disneyimg.jpg" alt="" class="img-responsive" />-->
<!--        </div>-->
<!--    	<div class="col-lg-8 col-md-8 col-sm-12">-->
<!--        	<p style=" text-align: justify;">Every ticket purchased the 18th - 19th of December 2017 gets free entry into our prize draw to win a 3 night trip to Disneyland Paris for up to 4 guests including travel from Manchester airport and £500 spending money. The winner will be announced during the Christmas Drive In event with traveling dates available through 2019!</p>-->
<!--        </div>-->
        
<!--    </div>-->
<!--</div>-->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 szsss"><a href="#movies" class="buy smooth-goto"><img src="images/ticket-logo.png" alt=""></a></div>
      <div class="col-lg-8 col-md-8 col-sm-12 text-center"><button type="button" class="btn btn-info btn-lg dfcd" data-toggle="modal" data-target="#myModal">Terms and conditions</button>
	  <!--<a href="#tos" data-toggle="modal">Terms and conditions</a>-->
        <p>2018 Christmas Drive-In™ is used under licence from Z100 Entertainment Inc</p>
      </div>
    </div>
  </div>
</div>

<!--geo-modal-->
<div class="modal fade" id="testModal" role="dialog">
    <div class="modal-dialog">
    	<!-- Modal content -->
    	<div class="modal-content">
            <!--<span class="close" data-dismiss="modal">&times;</span>-->
            <img src="images/logo.png" alt="">
            <h3>Christmas Drive In Tickets</h3>
            <p>Our ticket office is currently undergoing maintenance by Santa’s elves and will be open again soon. Please leave your email so we can notify you as soon as tickets are available along with a special message from Santa!</p>
        		<!-- Begin Mailchimp Signup Form -->
        		<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
        		<style type="text/css">
        			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        			/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        			We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        		</style>
        		<div id="mc_embed_signup">
        			<form action="https://christmasmovies.us19.list-manage.com/subscribe/post?u=8c7d2777503175979255c0c09&amp;id=5ede1ae11a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        				<div id="mc_embed_signup_scroll">
        
        				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
        				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8c7d2777503175979255c0c09_5ede1ae11a" tabindex="-1" value=""></div>
        				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        				</div>
        			</form>
        		</div>
        
        		<!--End mc_embed_signup-->
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

    $('.carousel').carousel({

        interval: 5000 //changes the speed

    })

	$( document ).ready(function() {
	    $("#testModal").modal({backdrop: 'static', keyboard: 'false'});
		// if (navigator.geolocation) {
		// 	navigator.geolocation.getCurrentPosition(showPosition);
		// } else { 
		// 	alert("Geolocation is not supported by this browser.");
		// }
	});

	// function showPosition(position) {
	//     console.log(position.coords);
	// 	var iUrl = 'proxy.php?destinations='+position.coords.latitude+','+position.coords.longitude;
    //     $.ajax({
    //         type : 'GET',
    //         url  : iUrl,
    //         crossDomain: true,
    //         dataType:'json',
    //         success :  function(data){
    //             if(data){
    //                 var dist = parseFloat(data.rows[0].elements[0].distance.text.replace(',', ''));
    //                 if( dist > 30){
                        
    //                 }
    
    //             }
    //         }
    //     });

	// }

   	$('.panel-heading a').click(function() {

		$('.panel-heading').removeClass('active');



		//If the panel was open and would be closed by this click, do not active it

		if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))

			$(this).parents('.panel-heading').addClass('active');



	});



$(document).on('click', 'a.forscroll[href^="#"]', function (event) {

    event.preventDefault();



    $('html, body').animate({

        scrollTop: $($.attr(this, 'href')).offset().top-100

    }, 500);

});



$('ul.navbar-nav li a').click(function() {

 $('ul.navbar-nav li a').removeClass('active');

  $(this).addClass('active');



 });



    </script> 
<script>

   // The function actually applying the offset

function offsetAnchor() {

  if (location.hash.length !== 0) {

    window.scrollTo(window.scrollX, window.scrollY - 100);

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
<script>

$('.smooth-goto').on('click', function() {

    $('html, body').animate({scrollTop: $(this.hash).offset().top - 50}, 1000);

    return false;

});

</script>
 <!-- Start of REVE Chat Script-->
 <script type='text/javascript'>
 window.$_REVECHAT_API || (function(d, w) { var r = $_REVECHAT_API = function(c) {r._.push(c);}; w.__revechat_account='10295308';w.__revechat_version=2;
   r._= []; var rc = d.createElement('script'); rc.type = 'text/javascript'; rc.async = true; rc.setAttribute('charset', 'utf-8');
   rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?'+new Date().getTime();
   var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(rc, s);
 })(document, window);
</script>
<!-- End of REVE Chat Script -->
</body>
</html>
