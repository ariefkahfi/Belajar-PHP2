<?php

$value = -12.20;


echo $value."<br/>";

if(filter_var($value,FILTER_VALIDATE_INT) || $value == 0){
   echo "Valid integer";
}else{
   echo "Not an Integer";
}