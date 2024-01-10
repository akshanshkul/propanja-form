<?php
include '../vendor/autoload.php';
include '../config/define.php';
use App\classes\Helper;
use App\classes\Session;
use App\adminmanagement\GetAdminData;

Session::init();


$loginStatus = Session::get('adminLoginSuccess');
$adminId = Session::get('adminId');

if ($loginStatus) {
    header("Location: home");
    exit(); // Ensure no code is executed after the redirect
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Sign In | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>



    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper" style="margin-left:0;">
        <div class="row g-0 auth-row">
            <div class="col-lg-6">
                <div class="auth-cover-wrapper bg-primary-100">
                    <div class="auth-cover">
                        <div class="title text-center">
                            <h1 class="text-primary mb-10" style="color:blue;">Welcome Back</h1>
                            <p class="text-medium">
                                Sign in to your Existing account to continue
                            </p>
                        </div>
                        <div class="cover-image">
                            <img src="assets/images/auth/signin-image.svg" alt="" />
                        </div>
                        <div class="shape-image">
                            <img src="assets/images/auth/shape.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
                <div class="signin-wrapper">
                    <div class="form-wrapper">
                        <h6 class="mb-15">Admin Login</h6>
                        <p class="text-sm mb-25">
                            Start creating the best possible user experience for you
                            customers.
                        </p>
                        <form action="loginAdminHandler.php" method="POST">
                            <?php



                            $helper = new Helper();
                            $txt = Session::get('admin-login-success');
                            $newPlayerId = Session::get('admin-id');

                            if (isset($txt)) {
                                if ($newPlayerId) {
                                    echo "<p style='color:green'>Login Successfull</p>";


                                } else {
                                    echo "<p style='color:var(--blue)'>{$txt}</p>";
                                }
                            }
                            ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <input type="email" placeholder="Email" name="email" />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="password" />
                                    </div>
                                </div>
                                <!-- end col -->
                                <!-- <div class="col-xxl-6 col-lg-12 col-md-6">
                                    <div class="form-check checkbox-style mb-30">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="checkbox-remember" />
                                        <label class="form-check-label" for="checkbox-remember">
                                            Remember me next time</label>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                    <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                        <a href="reset-password.html" class="hover-underline">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div> -->
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <input type="submit" class="main-btn primary-btn btn-hover w-100 text-center"
                                            value="Sign In" name="adminLogin" />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        </div>
        </section>
        <!-- ========== signin-section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                <a href="https://technov.in" rel="nofollow" target="_blank">
                                    Techno V
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div class="terms d-flex justify-content-center justify-content-md-end">
                            <a href="#0" class="text-sm">Term & Conditions</a>
                            <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>