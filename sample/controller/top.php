<?php
class Top {
  public $name;
  public $img_path;
  public $profile;
  public $news;

  function __construct() {
    require_once(CONTROLLER_DIR . '/database.php');
    require_once(MODEL_DIR . '/mTop.php');
    require_once(MODEL_DIR . '/common.php');
  }

  function getProfile() {
    $mTop = new mTop();
    return $mTop->getProfile();
  }

  function getImg($param) {
    $mTop = new mTop();
    return $mTop->getImgPath(array($param));
  }

  function getNews() {
    $mTop = new mTop();
    return $mTop->getNews();
  }

}

$main = new Top();

$main->name = "top";
$main->img_path['top'] = $main->getImg('top');
$main->img_path['live2d'] = $main->getImg('live2d');
$main->img_path['illust'] = $main->getImg('illust');
$main->profile = preg_replace("(\n)", '<br>', $main->getProfile());
$main->news = $main->getNews();

require_once(VIEW_DIR . '/header.html');
require_once(VIEW_DIR . '/top.html');
require_once(VIEW_DIR . '/footer.html');
