<?php

/**
 * must have app/view folder 
 */

function _get_view($view) {
    $file = DD . "/app/view/" . $view . ".php";
    if(file_exists($file)) {
        require $file;
    } else {
        echo "404 Idiot!";
    }
}
?>