<?php
$areaList = array(
    "北海道" => 5,
    "東北" => 12,
    "関東" => 867
);

require_once("../Controller/database.php");


try {
  $db = new Database();
  $result = $db->getArea();
} catch (Exception $e) {
    
}

try {
  $db = new Database();
  $result = $db->getconcertSearch();
} catch (Exception $e) {
    
}
require_once("../View/home.1.html");
