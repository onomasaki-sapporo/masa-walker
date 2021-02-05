<?php
$requestParam = $_GET;
function h($str) {
    echo htmlspecialchars($str);
}

foreach($requestParam as $key => $value) {
    echo  $key . " : " . $value . "<br>";
}