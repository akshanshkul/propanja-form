function pay_now() {
    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var amt = 500;
    var phone = jQuery('#phone').val();
    var weight = jQuery('#weight').val();

    jQuery.ajax({
        type: 'POST',
        url: 'payment_process.php',
        data: "amt=" + amt + "&name=" + name + "&email=" + email + "&phone=" + phone + "&weight=" + weight,
        success: function (result) {
            var options = {
                "key": "rzp_test_7qNNuUClFfm5DB",
                "amount": 500 * 100,
                "currency": "INR",
                "name": "Pro Panja League ",
                "description": "Pro Panja League has partnered with AISW to host an amateur Armwrestling competition in Mumbai",
                "image": "assets/logo/ppl-logo.png",
                "theme": {
                    "color": "#8F0000"
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "handler": function (response) {
                    jQuery.ajax({
                        type: 'POST',
                        url: '../payment_update.php',
                        data: "payment_id=" + response.razorpay_payment_id,
                        success: function (result) {
                            window.location.href = "success-registration.php";
                        }
                    });
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    });
}
function pay_now2() {
    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var amt = 1000;
    var phone = jQuery('#phone').val();
    var weight = jQuery('#weight').val();

    jQuery.ajax({

        success: function (result) {
            var options = {
                "key": "rzp_test_7qNNuUClFfm5DB",
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
        pay_now2()
        return true;
    } else {
        // Some fields are empty
        alert('Please fill in all fields.');
        return false;
    }
}