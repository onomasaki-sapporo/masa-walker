<?php
require_once("../Controller/database.php");

$param = $_GET;
$db = new Database();
$result;

if (array_key_exists('areaId', $param)) {
  try {
    var_dump($requestParam['search1']);
    // $result = $db->getAreaSearch($param['search1']);
    $result = $db->getarea($param['areaId']);
    var_dump($result);
  } catch (Exception $e) {
    
  }
} else {
  $result = $db->getareaAll();
  var_dump($result);
}

if(array_key_exists('isAjax', $param) && $param['isAjax']) {
  require_once("../View/home.1.detail.sample.html");
  exit;
}

require_once("../View/home.1.html");
