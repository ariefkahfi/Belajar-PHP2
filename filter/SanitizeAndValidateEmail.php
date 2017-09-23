<?php

$email = "arief kahfi@g mail .c om";


$sanitize = filter_var($email,FILTER_SANITIZE_EMAIL);

echo "Sanitized Email : $sanitize <br/>";


if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Valid Email Address";
}else{
    echo "Invalid Email Address";
}



