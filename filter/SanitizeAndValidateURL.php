<?php
$url = "http://www.ar ie  f k a h fi.com";

echo "Before Sanitize : $url<br/>";

echo "Valid URL :";
echo filter_var($url,FILTER_VALIDATE_URL) ? "This is Valid URL" : "This is Invalid URL" ;

echo "<br/><hr/>";


$filter_url = filter_var($url,FILTER_SANITIZE_URL);

echo "Sanitized URL : $filter_url<br/>";

echo "Valid URL : ";

if(filter_var($filter_url,FILTER_VALIDATE_URL)){
    echo "This is valid URL";
}else{
    echo "This is Invalid URL";
}