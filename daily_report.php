<?php
require 'mail.php';
require 'config.php';
//$date = '2012-11-08';
//$day_before = date( 'Y-m-d', strtotime( $date . ' -1 day' ) );
$date = date('Y-m-d');
$tdate = date( 'Y-m-d', strtotime( $date . ' -1 day' ) );





 $sql = "SELECT A.address,A.location, A.Dated, A.eventTime as eventTime, purchase_type, sum(A.count) as sold, sum(A.total) as total FROM (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(location, ' ', 1), ' ', -1) as location , amount as total, amount/items as purchase_type, items as count, Dated, eventTime,address FROM `Users` WHERE CurrentDate='$tdate') A group by A.Dated, A.eventTime, A.purchase_type, A.location,A.address ";
$select2 = mysqli_query($db, $sql );
$result=mysqli_num_rows($select2);


                    if($result==0)
                    {

                      $message="No Ticket Sold Today";

                           // die();
                    }
                    else
                    {
                    	$message.='<h2>Tickets Report</h2>
                    <table id="example" class="table table-striped table-bordered" border="1" cellspacing="0" width="680px">
                        <thead>
                        <tr>
                            <th>Movie Date</th>
                            <th>Location</th>
                            <th>Movie Time</th>
							<th>Type</th>
                            <th>Sold</th>                           
                            <th>Revenue </th>

                        </tr>
                        </thead>';

                        while ( $result = mysqli_fetch_assoc( $select2 ) ) {
                            $sum += ($result['total']);
							$type = $result['purchase_type'];
							if ($type == '12'){
								$type = "Standard Ticket";
							}elseif ($type == '26') {
								$type = "VIP Ticket";
							}else{
								$type = "Ticket £" . $type;
							}
 $dd = strtotime( $result['Dated'] );
							
                        //var_dump($result);
                       $message.='<tr>

                                <td>
		                            '.date( "F j, Y", $dd ) .' : '. $result['location'].'</td>
		                            <td>'.$result['address'].'</td>
                                <td>'.$result['eventTime'].'</td>
                                <td>'.$type.'</td>
                                <td>'. $result['sold'].'</td>
                                <td>'. ($result['total']).'</td>
                            </tr>';

                    }
                    $message.='<tr>
                            <td colspan="5" class="text-center"><strong>Total</strong></td>
                            <td><strong>'. $sum.'</strong></td>
                        </tr>
                    </table>';
                    
                    }

                     $subject="The GretestFestival Daily Report $tdate";
                      $message;
                    $to='nishantsaini0442@gmail.com';
                    send_mail($subject,$message,$to);
                    ?>