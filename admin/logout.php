<?php
include '../vendor/autoload.php';
use App\classes\Session;

Session::init();
Session::unsetSession('adminLoginSuccess');
Session::unsetSession('adminId');

Session::destroy();

$url = "index.php";

// If no referring page is set, redirect to a default page (e.g., index.php)
header('Location: ' . $url);
exit;



?>