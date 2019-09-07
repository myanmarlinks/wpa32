<?php
define("DD", realpath("../"));

require DD . "/wpa32/functions.php";

if(!isset($_GET['page'])) {
    $page = "home";
} else {
    $page = $_GET['page'];
}
_get_view($page);

?>