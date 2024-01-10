// function pay_now_button_pop_up_funtion(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();jQuery.ajax({success:function(o){new Razorpay({key:"rzp_live_XE1eJUIggUAuJI",amount:5e4,currency:"INR",name:"Pro Panja League ",description:"Pro Panja League has partnered with AISW to host an amateur Armwrestling competition in Mumbai",image:"assets/logo/ppl-logo.png",theme:{color:"#000000"},prefill:{name:e,email:a,contact:n},handler:function(o){jQuery.ajax({type:"POST",url:"yeactY7sjpay45878965acrstjaoshya.php",data:"amt=500&name="+e+"&email="+a+"&phone="+n+"&weight="+t+"&payment_id="+o.razorpay_payment_id,success:function(e){window.location.href="success-registration.php"}})}}).open()}})}function checkFields(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();return""!==e&&""!==a&&""!==n&&""!==t?(pay_now_button_pop_up_funtion(),!0):(alert("Please fill in all fields."),!1)}
// function pay_now_button_pop_up_funtion(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();jQuery.ajax({success:function(o){new Razorpay({key:"rzp_test_7qNNuUClFfm5DB",amount:100,currency:"INR",name:"Pro Panja League ",description:"Pro Panja League has partnered with AISW to host an amateur Armwrestling competition in Mumbai",image:"assets/logo/ppl-logo.png",theme:{color:"#000000"},prefill:{name:e,email:a,contact:n},handler:function(o){jQuery.ajax({type:"POST",url:"yeactY7sjpay45878965acrstjaoshya.php",data:"amt=1&name="+e+"&email="+a+"&phone="+n+"&weight="+t+"&payment_id="+o.razorpay_payment_id,success:function(e){window.location.href="success-registration.php"}})}}).open()}})}function checkFields(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();return""!==e&&""!==a&&""!==n&&""!==t?(pay_now_button_pop_up_funtion(),!0):(alert("Please fill in all fields."),!1)}
// function pay_now_button_pop_up_funtion(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();jQuery.ajax({success:function(o){new Razorpay({key:"rzp_test_7qNNuUClFfm5DB",amount:5e4,currency:"INR",name:"Pro Panja League ",description:"Pro Panja League has partnered with AISW to host an amateur Armwrestling competition in Mumbai",image:"assets/logo/ppl-logo.png",theme:{color:"#000000"},prefill:{name:e,email:a,contact:n},handler:function(o){jQuery.ajax({type:"POST",url:"yeactY7sjpay45878965acrstjaoshya.php",data:"amt=500&name="+e+"&email="+a+"&phone="+n+"&weight="+t+"&payment_id="+o.razorpay_payment_id,success:function(e){window.location.href="success-registration.php"}})}}).open()}})}function checkFields(){var e=jQuery("#name").val(),a=jQuery("#email").val(),n=jQuery("#phone").val(),t=jQuery("#weight").val();return""!==e&&""!==a&&""!==n&&""!==t?(pay_now_button_pop_up_funtion(),!0):(alert("Please fill in all fields."),!1)}



function pay_now_button_pop_up_funtion() {
    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var amt = 500;
    var phone = jQuery('#phone').val();
    var weight = jQuery('#weight').val();

    jQuery.ajax({

        success: function (result) {
            var options = {
                "key": "rzp_live_XE1eJUIggUAuJI",
                "amount": 500 * 100,
                "currency": "INR",
                "name": "Pro Panja League ",
                "description": "Pro Panja League has partnered with AISW to host an amateur Armwrestling competition in Mumbai",
                "image": "assets/logo/ppl-logo.png",
                "theme": {
                    "color": "#000000"
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },

                "handler": function (response) {
                    jQuery.ajax({
                        type: 'POST',
                        url: 'yeactY7sjpay45878965acrstjaoshya.php',
                        data: "amt=" + amt + "&name=" + name + "&email=" + email + "&phone=" + phone + "&weight=" + weight + "&payment_id=" + response.razorpay_payment_id,
                        success: function (result) {
                            window.location.href = "success-registration.php";
                        }
                    });
                },
                "checkout": {
                    "method": {
                        "netbanking": 1,
                        "card": 1,
                        "upi": 1,  // Set to 1 to enable UPI
                        "wallet": 0
                    }
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    });
}
function checkFields() {
    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var phone = jQuery('#phone').val();
    var weight = jQuery('#weight').val();

    // Check if all fields are filled
    if (name !== '' && email !== '' && phone !== '' && weight !== '') {
        // All fields are filled
        pay_now_button_pop_up_funtion()
        return true;
    } else {
        // Some fields are empty
        alert('Please fill in all fields.');
        return false;
    }
}