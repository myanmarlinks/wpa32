<?php

function _HomeController() {
    $data = [
        "students" => [
        [ 
            "id" => 1,
            "name" => 'Aung Aung', 
            'phone_no' => '092342342' 
        ],
        [
            "id" => 2, 
            "name"  => 'Hla Hla', 
            "phone_no"  => '09242342'
        ]
        ],
        "classes" => [
        [ "id" => 1, "name"  => "WPF"],
        [ "id" => 2, "name"  => "WPA"]
        ],
        "batches" => [
            [ "id" => 1, "class_id" => 1, "batch" => 1 ],
            [ "id" => 2, "class_id" => 2, "batch" => 1 ]
        ],
        $student_batch = [
           ["id" => 1, "student_id" => 1, "batch_id" => 1],
            ["id" => 2, "student_id" => 1, "batch_id" => 2]
        ]
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

function _LoginController() {
    $hostname = _config_get("database.hostname");
    $username = _config_get("database.username");
    $password = _config_get("database.password");
    $dbname = _config_get("database.dbname");

    $link = mysqli_connect($hostname, $username, $password, $dbname);
 
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    } 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if(_check_empty($username)) {
            _dump("User Name is Empty");  
        } 
        if(_check_empty($password)) {
            _dump("Password is empty");
        }
        if(_check_empty($confirm_password)) {
            _dump("Confirm Password is empty");
        }
    }
    _get_view("login");
}
 ?>