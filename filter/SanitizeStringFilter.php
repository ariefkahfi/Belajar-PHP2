<?php


$before = "<h4>Hello HTML Tag</h4>";

echo $before;

echo "After Sanitized by filter_var() using PHP Filter<br/>";

$after = filter_var($before,FILTER_SANITIZE_STRING);

echo $after;


