/**
 kdaviesnz March 2018
 javascript for the payment modal form
 Changes:
 Added buyTicket(event) function. This sets the sq-location and sq-address fields when the user clicks a Buy Tickets button.
 Added cardName, telephone, location, and address properties.
 Added setPrice(event) and setNumberOfTickets(event) functions.
 Added code to reset the form if user chooses to close the form instead of submitting it.
 Price now gets loaded from ticket type dropdown instead of being hardcoded.
 */
// @see https://docs.connect.squareup.com/payments/sqpaymentform/sqpaymentform-setup#step-1-update-the-head-section-of-your-payment-page
// @see https://docs.connect.squareup.com/articles/using-sandbox for credit card numbers to use for testing
// eg Visa	4532759734545858

var sqPaymentForm = new SqPaymentForm({

    // Replace this value with your application's ID (available from the merchant dashboard).
    // If you're just testing things out, replace this with your _Sandbox_ application ID,
    // which is also available there.
    applicationId: applicationID,
 //    applicationId: 'sandbox-sq0idp-7zv5a4K_Zdh4LQOaCmiKUQ',
   // applicationId: 'EAAAEJz2d3Tt6Tlg1cVPDQfXpa2FcI-oFuHHC7ek6G9jAuW1eGSeRB5uFBzsCxBz',
    // applicationId: 'sq0idp-knOLdD5phYo2PEuKd1hUYg',
    // applicationId: 'sandbox-sq0idp-knOLdD5phYo2PEuKd1hUYg',
    inputClass: 'sq-input',
    cardNumber: {
        elementId: 'sq-card-number',
        placeholder: "0000 0000 0000 0000" // 4532759734545858
    },
    cvv: {
        elementId: 'sq-cvv',
        placeholder: 'CVV'
    },
    expirationDate: {
        elementId: 'sq-expiration-date',
        placeholder: 'MM/YY'
    },
    postalCode: {
        elementId: 'sq-postal-code',
        placeholder: 'Postal Code'
    },
    cardName: {
        elementId: 'sq-card-name',
        placeholder: ''
    },
    telephone: {
        elementId: 'sq-telephone',
        placeholder: ''
    },
    location: {
        elementId: 'sq-location',
        placeholder: ''
    },
    address: {
        elementId: 'sq-address',
        placeholder: ''
    },
    inputStyles: [
        // Because this object provides no value for mediaMaxWidth or mediaMinWidth,
        // these styles apply for screens of all sizes, unless overridden by another
        // input style below.
        {
            fontSize: '14px',
            padding: '8px'
        },
        // These styles are applied to inputs ONLY when the screen width is 400px
        // or smaller. Note that because it doesn't specify a value for padding,
        // the padding value in the previous object is preserved.
        {
            mediaMaxWidth: '400px',
            fontSize: '18px',
        }
    ],
    callbacks: {
        cardNonceResponseReceived: function(errors, nonce, cardData) {
            console.log("cardNonceResponseReceived:");
            console.log("nonce");
            console.log(nonce);
            console.log("cardData");
            console.log(cardData)
            if (errors) {
                var errorDiv = document.getElementById('errors');
                errorDiv.innerHTML = "";
                errors.forEach(function(error) {
                    var p = document.createElement('p');
                    p.innerHTML = error.message;
                    errorDiv.appendChild(p);
                });
            } else {
                // This alert is for debugging purposes only.
                // alert('Nonce received! ' + nonce + ' ' + JSON.stringify(cardData));
                // Assign the value of the nonce to a hidden form element
                var nonceField = document.getElementById('card-nonce');
                nonceField.value = nonce;
                // Submit the form
                document.getElementById('form').submit();
            }
        },
        unsupportedBrowserDetected: function() {
            // Alert the buyer that their browser is not supported
        }
    }
});


function submitButtonClick(event) {
    event.preventDefault();
    sqPaymentForm.requestCardNonce();
}

function buyTicket(event) {

    event.preventDefault();
    document.getElementById("sq-location").value = $(event.target).data("location");
    document.getElementById("sq-address").value = $(event.target).data("address");
    document.getElementById("eventtime").value = $(event.target).data("time");
    document.getElementById("date").value = $(event.target).data("dates");
    document.getElementById("ttype").value = document.getElementById("ticketType").value;

    if (document.getElementById("ticketType") && document.getElementById("sq-price").value == "") {
        // get value in the ticket type select and set price field.
        document.getElementById("sq-price").value = $(event.target).closest('form').find("select").val();
    }
    if (document.getElementById("ticketType") && document.getElementById("eventquantity").value == "") {
        document.getElementById("eventquantity").value = "2";
        $("#confirmed-qty").html("2");
    }
    if (document.getElementById("ticketType") && document.getElementById("eventquantity").value != $("#confirmed-qty").html()) {
        $("#confirmed-qty").html(document.getElementById("eventquantity").value)
    }
    if (document.getElementById("eventquantity").value=="") {
        document.getElementById("eventquantity").value = "1";
        $("#confirmed-qty").html("1");
    }
    if (document.getElementById("sq-price").value=="") {
        document.getElementById("sq-price").value = "15";
        $("#confirmed-qty").html("1");
    }
   $("#confirmed-time").html($(event.target).data("dates") + " " + $(event.target).data("time"));
   var total =  document.getElementById("sq-price").value * document.getElementById("eventquantity").value;
   $("#confirmed-amount").html(total+"");

}

function setPrice(event) {
    document.getElementById("sq-price").value = $(event.target).val();
    if (document.getElementById("ticketType") && document.getElementById("eventquantity").value == "") {
        document.getElementById("eventquantity").value = "2";
        $("#confirmed-qty").html("2");
    }
    var total =  document.getElementById("sq-price").value * document.getElementById("eventquantity").value;
    $("#confirmed-amount").html(total+"");
}

function setNumberOfTickets(event){
    document.getElementById("eventquantity").value = $(event.target).val();
    if (document.getElementById("ticketType") && document.getElementById("sq-price").value == "") {
        document.getElementById("sq-price").value = $(event.target).closest('form').find("select").val();
    }
    $("#confirmed-qty").html($(event.target).val());
    var total =  document.getElementById("sq-price").value * document.getElementById("eventquantity").value;
    $("#confirmed-amount").html(total+"");
}

// Reset the form is user chooses to close the form instead of submitting it.
$('#exampleModalLong').on('hidden.bs.modal', function () {
    // reset the form fields.
    $("#sq-card-name").val("");
    $("#email").val("");
    $("#sq-telephone").val("");
    $("#sq-card-number").val("");
    $("#date").val("");
    $("#eventtime").val("");
    $("#sq-location").val("");
    $("#sq-address").val("");
    $("#sq-price").val("");
    $("#eventquantity").val("");
    $("#sq-expiration-date").html("");
    $("#sq-cvv").html("");
    $("#sq-postal-code").html("");
    $("#coupon").val("");
    $("#confirmed-time").html("");
    $("#confirmed-qty").html("");
    $("#confirmed-amount").html("");
})