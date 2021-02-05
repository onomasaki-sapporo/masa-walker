<?php
class Illustration {
  public $name;

  function __construct() {
    require_once(CONTROLLER_DIR . '/database.php');
    require_once(MODEL_DIR . '/common.php');
  }

}

$main = new Illustration();

$main->name = "illustration";

require_once(VIEW_DIR . '/header.html');
require_once(VIEW_DIR . '/illustration.html');
require_once(VIEW_DIR . '/footer.html');

