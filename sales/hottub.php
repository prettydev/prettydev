<?php
/**
Changes kdaviesnz March 2018
Added mysqli_real_escape_string()
Added $eventName (defined in config.php)
Replaced * in queries with field names
Fixed relative paths.
Date dropdown is now loaded via an array.
Fixed event time.
 */
require '../config.php';
if ( isset( $_GET['date'] ) && ! empty( $_GET['date'] ) ) {
	$date   = mysqli_real_escape_string($db,$_GET['date']);
	$select = mysqli_query($db, 'select `Id`, `Name`, `Email`, `Invoice`, `Amount`, `Items`, `Phone`, `Dated`, `EventTime`, `Status`, `CurrentDate`, `location`, `address`, `transactionId` from Users where CurrentDate="' . $date . '" order by Id DESC' );

} else {
	$select = mysqli_query($db, 'select `Id`, `Name`, `Email`, `Invoice`, `Amount`, `Items`, `Phone`, `Dated`, `EventTime`, `Status`, `CurrentDate`, `location`, `address`, `transactionId` from Users order by Id DESC' );
	$date   = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title><?php echo $eventName; ?> Sale Reports</title>
    <link href="../images/favi.png" rel="shortcut icon">
    <!-- Css files  -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <script>
        var url = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/' . $_SERVER['PHP_SELF'] . '?date=';?>';
    </script>
</head>
<body>
<header>
    <div class="container">
        <a href="#" class="logo"><img src="" alt="logo"></a>
        <a href="#pink" class="bt-btn">Book Tickets</a>
    </div>
</header>


<!-- Modal -->
<div class="modal fade mdlform" id="exampleModalLong" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle"><?php echo $eventName; ?> <?php echo $date; ?>/h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="payment-form">
	<span class="payment-errors">
	</span>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" data-stripe="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <input type="text" name="Phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" size="20" data-stripe="number" id="number">
                    </div>
                    <input type="hidden" value="" id="date" name="date">
                    <input type="hidden" value="" id="eventtime" name="eventtime">
                    <input type="hidden" value="" id="eventquantity" name="eventquantity">
                    <div class="form-group">

                        <label>Expiration (MM/YY)</label>
                        <div class="row">
                            <div class="col-sm-6"><input type="text" size="2" placeholder="MM" data-stripe="exp_month"
                                                         id="month"></div>
                            <div class="col-sm-6"><input type="text" size="2" placeholder="YY" data-stripe="exp_year"
                                                         id="year"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>CVC</label>
                        <input type="text" size="4" data-stripe="cvc" id="stripe">
                    </div>
                    <input type="submit" class="bt-btn submit" value="Submit Payment">
                </form>
            </div>
        </div>
    </div>
</div>


<?php
// kdaviesnz
$dates = array();
for ($i=1;$i<32;$i++) {
    if ($i<10) {
        $i = "0$i";
    }
    $dates[] = array("2017-01-".$i,date("F j, Y", strtotime("2017-01-".$i)) );
}
$i = 1;
for ($i=1;$i<29;$i++) {
	if ($i<10) {
		$i = "0$i";
	}
	$dates[] = array('2017-02-'.$i, date("F j, Y", strtotime('2017-02-'.$i)));
}
?>
<div class="section graybg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="rtlttxtwimg" style="overflow-x:auto;">
                    <h2>Sale Report</h2>
                    <div style="float:right;">
                        <label>Sale By Date
                            <select name="bydate" class="form-control input-sm bydate">
                                <option value="">Select Date</option>
	                            <?php
                                // kdaviesnz
	                            foreach ($dates as $rdate) {
		                            ?>
                                    <option <?php if ( $date == $rdate[0] ) {
			                            echo 'selected';
		                            } ?> value="<?php echo $rdate[0]; ?>">
                                        <?php echo $rdate[1]; ?>
                                    </option>
		                            <?php
	                            }
	                            ?>
                            </select>
                        </label>
                    </div>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Invoice</th>
                            <th>Transaction Id</th>
                            <th>Price</th>
                            <th>Items</th>
                            <th>Date</th>
                            <th>Show Time</th>
                            <th>Location</th>
                            <th>Address</th>
                            <th></th>
                            <th>Edit</th>
                        </tr>
                        </thead>
						<?php 
                        $data='';
                        while ( $result = mysqli_fetch_assoc( $select ) ) {
						    // kdaviesnz - correct $result['EventTime']
						    if (!empty($result['EventTime'])) {
						        // 28-10-2017_06.30P
                                $temp = explode("_", $result['EventTime']);
							    $result['EventTime'] = isset($temp[1])?$temp[1]:$result['EventTime'];
                            }
                            
						    ?>
                            <tr>

                                <td><?php echo $result['Name']; ?></td>
                                <td><?php echo $result['Email']; ?></td>
                                <td><?php echo $result['Phone']; ?></td>
                                <td><?php echo $result['Invoice']; ?></td>
                                <td><?php echo $result['transactionId']; ?></td>
                                <td><?php echo $result['Amount']; ?></td>
                                <td><?php echo $result['Items']; ?></td>
                                <td><?php $dd = strtotime( $result['Dated'] );
									echo date( "F j, Y", $dd ); ?></td>
                                <td><?php echo $result['EventTime']; ?></td>
                                <td><?php echo $result['location']; ?></td>
                                <td><?php echo $result['address']; ?></td>
                                <td>
	                                <a href="#" class="btn btn-xs btn-success resend-ticket" data-Id="<?php echo $result['Id'];?>">
		                                Resend Ticket
	                                </a>
                                </td>
                                <td>

                                    <a  data-toggle="modal" data-target=".special-form<?php echo $result['Id'];?>" class="btn btn-primary cstm">Edit Ticket</a>
                                   
                                   <div id="myModal124" class="modal fade special-form<?php echo $result['Id']?>" role="dialog" style="z-index:999999">
                              <div class="modal-dialog">

   
                               <div class="modal-content">
                                 <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              
                                                     <h4 class="modal-title" id="myModalLabel">Edit</h4>
                                                </div>
<div class="modal-body">
                                              
                                            
                <form class="form-horizontal" name="specialoffer"  id="special_booking<?php echo $result['Id']; ?>">
                                                <div class="row m-bottom">
                                                       
                                                <div class="col-sm-12">
                                                 
                                                        <div class="col-sm-6">
                     <input type="email" class="form-control" id="email" placeholder="Email" name="email" maxlength=100 autocomplete="off" value="<?php echo $result['Email'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-6">
 <input type="hidden" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $result['Id'] ?>">

                     <input type="tel" class="form-control" id="phone" placeholder="Phone No." name="phone_no" maxlength=100 autocomplete="off" value="<?php echo $result['Phone']?>">
                                                    </div>
                                                        
                                                 </div>
                                                    
   </div>
       
         <div class="row m-bottom">
                                             <div class="col-sm-12">
                    <div class="text-center"> <button type="buttton" class="btn btn-primary" onClick="return special_validate('special_booking<?php echo $result['Id']; ?>');">Edit</button></div>
<span class="error" style="color:red;display:block;text-align:center;padding:5px;clear:both"></span>
<div id="processing1"></div>
                                              </div>
                                        </div>  
        
        
                                             
                                    </form>                                                 
</div>  
      
      
                                          </div>

                                          </div>
                                         </div>
                                   
                                </td>
                            </tr>
						<?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
	<?php

  

		$sql = "SELECT A.location, A.Dated, A.eventTime as eventTime, purchase_type, sum(A.count) as sold, sum(A.total) as total FROM (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(location, ' ', 1), ' ', -1) as location , amount as total, amount/items as purchase_type, items as count, Dated, eventTime FROM `Users` WHERE 1) A group by A.Dated, A.eventTime, A.purchase_type, A.location ";
	?>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="rtlttxtwimg">
                    <h2>Tickets Report</h2>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Movie Date</th>
                            <th>Movie Time</th>
							<th>Type</th>
                            <th>Sold</th>                           
                            <th>Revenue </th>

                        </tr>
                        </thead>
						<?php
                        $sum = 0;
						$select2 = mysqli_query($db, $sql );
                        while ( $result = mysqli_fetch_assoc( $select2 ) ) {
                            $sum += ($result['total']);
							$type = $result['purchase_type'];
							if ($type == '12'){
								$type = "Standard Ticket - £12";
							}elseif ($type == '26') {
								$type = "VIP Ticket - £26";
							}else{
								$type = "Ticket £" . $type;
							}
                         //   var_dump($result);
                           // die();
                            ?>
                            <tr>

                                <td><?php $dd = strtotime( $result['Dated'] );
		                            echo date( "F j, Y", $dd ) . ': '. $result['location']; ?></td>
                                <td><?php echo $result['eventTime']; ?></td>
                                <td><?php echo $type; ?></td>
                                <td><?php echo $result['sold']; ?></td>
                                <td><?php echo ($result['total']); ?></td>
                            </tr>
						<?php } ?>
                        <tr>
                            <td colspan="4" class="text-center"><strong>Total</strong></td>
                            <td><strong><?php echo $sum;?></strong></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!--div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="rtlttxtwimg">
                    <h2>Tickets Report</h2>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Movie Date</th>
                            <th>Movie Time</th>
                            <th>Sold</th>
                            <th>Remaining</th>
                            <th>Revenue </th>

                        </tr>
                        </thead>
						<?php
                        /*$sum = 0;
						$select2 = mysqli_query($db, 'SELECT *, SUM(amount) as total, SUM(items) AS sold FROM `Users` GROUP BY Dated, EventTime' );
                        while ( $result = mysqli_fetch_assoc( $select2 ) ) {
                            $sum += ($result['total']);
                         //   var_dump($result);
                           // die();
                            ?>
                            <tr>

                                <td><?php $dd = strtotime( $result['Dated'] );
		                            echo date( "F j, Y", $dd ); ?></td>
                                <td><?php echo $result['EventTime']; ?></td>
                                <td><?php echo $result['sold']; ?></td>
                                <td><?php echo ( 500 -  $result['sold']) ;?></td>
                                <td><?php echo ($result['total']); ?></td>
                            </tr>
						<?php }*/ ?>
                        <tr>
                            <td colspan="4" class="text-center"><strong>Total</strong></td>
                            <td><strong><?php echo $sum;?></strong></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div-->

</div>
<footer>
    <div class="container">
        <a href="#"><img src="../images/ft-logo.png" alt="logo"></a>
        <p><?php echo $eventName; ?>. � 2017</p>
        <ul>
            <li><a href="#">Terms And Conditions</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Resend Ticket</a></li>
        </ul>
    </div>
</footer>
<!-- js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">

//    $(document).on('click', '.number-spinner button', function () {
//        var btn = $(this),
//            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
//            newVal = 0;
//
//        if (btn.attr('data-dir') == 'up') {
//            newVal = parseInt(oldValue) + 1;
//        } else {
//            if (oldValue > 1) {
//                newVal = parseInt(oldValue) - 1;
//            } else {
//                newVal = 1;
//            }
//        }
//        btn.closest('.number-spinner').find('input').val(newVal);
//    });









function special_validate(formname)
{
var formn      = $("#"+formname);

var email   =$("#email",formn).val().trim();
var phone_no   =$("#phone",formn).val().trim();





if(email=='')

{
$(".error",formn).html("Please Enter Email ID");
$("#email",formn).focus();
return false;
 }
var txtemailpattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
    if(txtemailpattern.test(email)==false)
    {   

                $(".error",formn).html("Please Enter Valid Email ID");
                $("#email",formn).focus();
         return false;
    }





/*
 if(phone_no=="" )
    {
        $(".error",formn).html("Please Enter Phone Number.");
    $("#phone",formn).focus();
return false;
    } 

*/

else
{




$(".error",formn).html("");
$("#processing1",formn).show();



$.ajax({
type: "POST",
            url: "t_edit.php",
            cache: false,
            data:$(formn).serializeArray(),
            }).done(function( msg ) {
                         
                                       
              if(msg==1)
                {
                    $(".error",formn).html("Editing Done");
                   $("#processing1",formn).hide();
                    //$(formn)[0].reset();
                  
                 


                 }
              
                else
                {

        
               $(".error",formn).html(msg);
               $("#processing1",formn).hide();

                }



});


}

return false;
}





    $(document).ready(function () {





        $(".resend-ticket").click(function(e){
            e.preventDefault();
            if ( confirm('Are you sure you want to resend ticket?') )
            {
                var element = $(this);
                element.addClass('disabled');
                var Id = $(this).attr('data-Id');

                jQuery.ajax({
                    url: "resend_ticket.php",
                    data:{Id:Id},
                    type: "GET",
                    success:function(data){
                        if ( data = ' success' )
                        {
                            element.removeClass('disabled');
                            alert ('Ticket has been sent');
                        }
                        else
                        {
                            alert (data);
                        }
                    }
                });
            }
        });

        $('#promovid').click(function () {
            $('#video').get(0).play();       // get(0) gets the original DOM element
            $('#promovid').unbind('click');  // remove click listener
        });
        $('#example').dataTable({
            "iDisplayLength": 25,
            "aLengthMenu": [[10, 20, 30, 40, -1], [10, 20, 30, 40, "All"]]
        });

        $('.bydate').change(function () {
            dat = $(this).val();
            if (dat) {

                window.location.href = url + dat;
            }
        });

//        var navListItems = $('ul.setup-panel li a'),
//            allWells = $('.setup-content');
//
//        allWells.hide();
//
//        navListItems.click(function (e) {
//            e.preventDefault();
//            var $target = $($(this).attr('href')),
//                $item = $(this).closest('li');
//
//            if (!$item.hasClass('disabled')) {
//                navListItems.closest('li').removeClass('active');
//                $item.addClass('active');
//                allWells.hide();
//                $target.show();
//            }
//        });
//        $('ul.setup-panel li.active a').trigger('click');

    });


    $(document.body).on('hidden.bs.modal', function () {
    $('#myModal124').removeData('bs.modal')
});
</script>


</body>
</html>