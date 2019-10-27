<?php

function testFun() {
    echo "Hello Idiot!";
}

function dump($value, $die = false) {
    var_dump($value);
    if($die == true) {
        die();
    }
}