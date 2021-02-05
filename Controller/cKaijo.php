<?php
require_once("../Model/mKaijo.php");

class KaijoController {
  function __construct() {
    $kaijoClass = new Kaijou();
    $result = $kaijoClass->calc(10);

    echo($result);
  }
}