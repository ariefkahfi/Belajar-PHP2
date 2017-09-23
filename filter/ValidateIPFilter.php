<?php

$ip = "172.31.0.0";

echo $ip ."<br/>";

if(filter_var($ip,FILTER_VALIDATE_IP)){
    echo "Valid IP Address";
}else{
    echo "Invalid IP Address";
}
