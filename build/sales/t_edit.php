<?php
require '../config.php';

if($_POST):



$email=mysqli_real_escape_string($db,$_POST['email']);
$id   =mysqli_real_escape_string($db,$_POST['id']);
$phone=mysqli_real_escape_string($db,$_POST['phone_no']);
if(!empty($id) && !empty($email)  && is_numeric($id) )
{
$select = mysqli_query($db, 'update Users set Email="'.$email.'" , Phone="'.$phone.'" where Id="' . $id . '"' );

echo 1;
exit;
}
else
{
echo "Please Enter Email and phone no";
exit;

}


endif;

?>