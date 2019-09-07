<?php

/* for($i = 0; $i < 5; $i++) {
    echo "Enter you name : ";
    $name = fgets(STDIN);
    echo "Your phone no. : ";
    $phone_no = fgets(STDIN);
    echo "Your name is $name, your phone is $phone_no";
} */
$confirm = "y";
while($confirm == "y") {
    echo "Enter you name : ";
    $name = fgets(STDIN);
    echo "Your phone no. : ";
    $phone_no = fgets(STDIN);
    echo "Your name is $name, your phone is $phone_no";
    echo "Anymore (y/n) ? ";
    $confirm = trim(fgets(STDIN)); 
}

?>