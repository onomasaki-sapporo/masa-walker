<?php
class Guide {
  public $name;

  function __construct() {
    require_once(CONTROLLER_DIR . '/database.php');
    require_once(MODEL_DIR . '/common.php');
  }

}

$main = new Guide();

$main->name = "contact";

require_once(VIEW_DIR . '/header.html');
require_once(VIEW_DIR . '/guide.html');
require_once(VIEW_DIR . '/footer.html');

