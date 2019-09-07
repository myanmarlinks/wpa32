<?php
define("DD", realpath("../"));
require DD . "/wpa32/functions.php";
require DD . "/app/controller/controllers.php";
if(!isset($_GET['page'])) {
    $page = "home";
} else {
    $page = $_GET['page'];
}
$controller = "_" . ucfirst($page) . "Controller";
if(function_exists($controller)) {
    call_user_func($controller);
} else {
    echo "404 Idiot!";
}


?>