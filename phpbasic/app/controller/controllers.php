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

?>