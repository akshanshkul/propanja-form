<?php
require_once 'vendor/autoload.php';
use App\form\GetData;

session_start();

$id = $_SESSION['user_id'];

$getData = new GetData();
$data = $getData->getResponse($id);

// Check if $data is not null before using it
if ($data !== null) {
    $name = ucfirst($data['name']);
    $email = ucfirst($data['email']);
    $phone = ucfirst($data['phone']);
    $paymentStatus = $data['payment_status'];

} else {
    // Handle the case when no data is found for the given user_id
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="assets/logo/ppl-logo.png">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <!-- HTML !-->
    <div class="main">
        <div class="logo">
            <a href="kasganjarm.in"><img src="assets/logo/ppl-logo.png" alt=""></a>
        </div>
        <div class="container">
            <?php if ($data !== null) { ?>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div>
                                <strong>
                                    <?= ucfirst($data['name']); ?>
                                </strong>
                            </div>
                            <div>
                                <?= ucfirst($data['email']); ?>
                            </div>
                            <div>
                                <?= ucfirst($data['phone']); ?>
                            </div>
                            <div>
                                <?= ucfirst($data['payment_id']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-0">Take a screenshot, Thank You!</p>
            <?php } else {
                echo "Please Register <a href='/' style='text-decoration: none;'>Home</a>";
            } ?>

            <div style="text-align:center;">
                <a href="about" style="text-decoration: none;">About Us</a> |
                <a href="contact" style="text-decoration: none;">Contact</a> |
                <a href="privacy" style="text-decoration: none;">Privacy</a> |
                <a href="terms" style="text-decoration: none;">Terms</a> |
                <a href="refund" style="text-decoration: none;">Refund</a>

            </div>
        </div>
        <p class="copyright">&copy; Copyright 2022 | Techno-V </p>

</body>

</html>