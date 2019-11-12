<?php
/**
kdaviesnz March 2018
html for the payment modal form
Changes:
Added sq-price, sq-location and sq-address hidden fields.
Total etc now gets set.
*/
?>
<!-- Modal -->

<div class="modal fade mdlform" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

  <div class="modal-dialog" role="document">
<style>
.errors{
	color:red;
}
 .sq-input {
	border: 1px solid #CCCCCC;
      margin-bottom: 10px;
      padding: 1px;
    }
    .sq-input--focus {
	outline-width: 5px;
      outline-color: #70ACE9;
      outline-offset: -1px;
      outline-style: auto;
    }
    .sq-input--error {
	outline-width: 5px;
      outline-color: #FF9393;
      outline-offset: 0px;
      outline-style: auto;
    }
</style>
    <div class="modal-content">



      <div class="modal-body">

    <form id="form" novalidate action="" method="post">

	<span class="payment-errors">

	</span>

	     <div class="form-group">

		   <label>Name</label>

		   <input id="sq-card-name" type="text" name="name">

		 </div>

		 <div class="form-group">

		   <label>Email</label>

		   <input type="email" name="email" id="email">

		 </div>

		 <div class="form-group">

		   <label>Telephone Number</label>

		   <input id="sq-telephone" type="text" name="Phone" id="phone">

		 </div>

		 <div class="form-group">

		   <label>Card Number</label>

		   <div id="sq-card-number"></div>

		 </div>

		<input type="hidden"  value="" id="date" name="date">

		<input type="hidden"  value="" id="eventtime" name="eventtime">

        <input type="hidden" id="sq-location" value=""  name="eventlocation">
        <input type="hidden" id="sq-address" value="" name="eventaddress">
        <input type="hidden" id="sq-price" value="" name="price">

        <input type="hidden"  value="" id="eventquantity" name="eventquantity">
        <input type="hidden"  value="" id="ttype" name="ticketType">
		 <div class="form-group">



		   <label>Expiration (MM/YY)</label>



		<div id="sq-expiration-date"></div>



		 </div>

		 <div class="form-group">

		   <label>CVC</label>

		  <div id="sq-cvv"></div>

		 </div>
		 <div class="form-group">

		   <label>Postal Code</label>

		  <div id="sq-postal-code"></div>

		 </div>

		 <input type="hidden" id="card-nonce" name="nonce">
		 <div class="form-group">
			 <label>Have a Coupon?</label>
			<div class="row">
			<div class="col-sm-6">

		  <input type="text" name="coupon" id="coupon" >
		 <span id="message" class="text-danger"></span>
			</div>
		<div class="col-sm-6">
			<button type="button" class="btn btn-primary" id="verify_coupon">Verify Coupon</button>
		</div>
		</div>
		 </div>


        <div class="form-group">

            <div class="col-md-2">

                <strong>Date:</strong>

            </div>

            <div class="col-md-8">

                <span id="confirmed-time"></span>

            </div>

        </div><br>



        <div class="form-group">

            <div class="col-md-2">

                <strong>Tickets:</strong>

            </div>

            <div class="col-md-8">

                <span id="confirmed-qty"></span>

            </div>

        </div><br>



        <div class="form-group" style="margin-top:-14px">

            <div class="col-md-2">

                <strong>Total:</strong>

            </div>

            <div class="col-md-8">

                <span id="confirmed-amount"></span> <?php echo $currency; ?>

            </div>

        </div>



		  <input type="submit" class="bt-btn submit"  onclick="submitButtonClick(event)" id="card-nonce-submit" value="Submit Payment">
		 </form>
<div id="errors"></div>
      </div>

    </div>

  </div>

</div>
