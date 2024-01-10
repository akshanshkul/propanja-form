<?php
include 'vendor/autoload.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pro Panja League Registration</title>
    <meta name="description"
        content="Register for the Pro Panja League match. Join the exciting arm wrestling competition and showcase your skills.">
    <meta name="keywords" content="Pro Panja League, arm wrestling, competition, registration">
    <meta name="author" content="Your Name">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Pro Panja League Registration">
    <meta property="og:description"
        content="Register for the Pro Panja League match. Join the exciting arm wrestling competition and showcase your skills.">
    <meta property="og:image" content="https://propanja.techcov.in/assets/logo/ppl-logo.png">
    <meta property="og:url" content="https://propanja.techcov.in/">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pro Panja League Registration">
    <meta name="twitter:description"
        content="Register for the Pro Panja League match. Join the exciting arm wrestling competition and showcase your skills.">
    <meta name="twitter:image" content="https://propanja.techcov.in/assets/logo/ppl-logo.png">
    <meta name="twitter:url" content="https://propanja.techcov.in/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://propanja.techcov.in/assets/logo/ppl-logo.png">



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/register.css?v=14476">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/check.js"></script>
    <style>
        #loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            display: none;
        }

        .loader {
            border: 8px solid red;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>


    <div class="main">
        <!-- Loader Container -->
        <div id="loader-container">
            <div class="loader"></div>
            <div style="font-weight:bold;">Paymeny Prossesing</div>
        </div>
        <div class="logo">
            <a href="https://propanja.com/"><img src="assets/logo/ppl-logo.png" alt=""></a>
            <a href="https://propanja.com/"><img src="assets/logo/aisw.png" alt=""></a>
        </div>
        <div class="container">
            <div class="title">
                Registration Form
            </div>
            <div class="form-area">
                <div class="tab-title">Personal Details</div>
                <form>
                    <div class="personal-details" id="form">
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div>
                            <label for="email">Email ID:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="phone">Mobile No:</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>

                        <div>
                            <label for="age_catagory">Weight Catagory:</label>
                            <select class="weight" id="weight" name="weight" required>
                                <option value="" selected>Select Catagory</option>
                                <option value="1">60 kg</option>
                                <option value="2">70 kg</option>
                                <option value="3">80 kg</option>
                                <option value="4">80 kg+</option>
                            </select>
                        </div>

                    </div>

                    <div class="button">
                        <input type="button" class="registration-button" name="add-player-registration" id="payment-btn"
                            value="Make Payment" onclick="checkFields()">
                    </div>
                </form>
                <h1 class="heading-text">Pro Panja League has partnered with AISW to host an amateur Armwrestling
                    competition in Mumbai.
                </h1>

                <p class="info ">
                    AISW is Asia’s biggest Calisthenics and Streetworkout competition organizer and a leading
                    calisthenics
                    gym brand in India. We started our operations in 2018 with the first ever National Level
                    calisthenics
                    competition and India’s first Calisthenics park in Malad, Mumbai.
                </p>

                <p class="info ">
                    Calisthenics is a way of living a healthy lifestyle, and has been there since early ages as a form
                    of
                    training for warriors. This form of training is completely natural and imitates fundamental
                    movements in
                    our day to day life, thus making a person strong and fit in all the elements of fitness. It gathered
                    attention in early 2000's when the people practicing this sport started organizing competitions and
                    created a platform for athletes to showcase their talent. This gave rise to Calisthenics and
                    Streetworkout championships worldwid

                </p>

                <p class="info ">
                <h6>About Event</h6>
                5.0 is expected to be Asia’s biggest calisthenics and
                strength fest so far. With a major focus on athletes,
                beginners and general audience, we strive to achieve 650 athlete registrations. The event could
                witness around 2700-4000 footfall.

                </p>
                <p class="info ">

                    <strong>Sports Integrated:</strong>
                    <span class="hover-underline-animation">MMA, Parkour, Arm Wrestling</span>
                    <br>
                    <strong>
                        Venue -
                    </strong><span class="hover-underline-animation"> Roaring Farm, Malad West,Mumbai</span>
                    <br>

                    <br>

                </p>
            </div>


            <div style="text-align:center;">
                <a href="about" style="text-decoration: none;">About Us</a> |
                <a href="contact" style="text-decoration: none;">Contact</a> |
                <a href="privacy" style="text-decoration: none;">Privacy</a> |
                <a href="terms" style="text-decoration: none;">Terms</a> |
                <a href="refund" style="text-decoration: none;">Refund</a>

            </div>
        </div>
    </div>
    <p class="copyright">&copy; Copyright 2022 | Techno-V </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="assets/js/register.js"></script>

</body>

</html>