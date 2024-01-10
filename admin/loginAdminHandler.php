<?php
require_once '../vendor/autoload.php';
include '../config/define.php';
use App\classes\Session;

echo $url = ROOT_URL . '/admin/home';
if (isset($_POST['adminLogin'])) {
    $adminReg = new App\adminmanagement\AdminLogin();
    $txt = $adminReg->adminLogin($_POST);
    Session::set('adminLoginStatus', $txt);
    $url = ROOT_URL . '/admin/home';
    header("Location: " . $url);
}























