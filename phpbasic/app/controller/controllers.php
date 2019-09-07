<?php

function _HomeController() {
    $data = [
        'title' => 'Myanmar Links',
        "hello" => "Hello World"
    ];
    _get_view("home", $data);
}

function _BlogController() {
    _get_view("blog");
}

function _PageController() {
    $data = [
        'title' => 'How are you?'
    ];
    _get_view("page", $data);
}

?>