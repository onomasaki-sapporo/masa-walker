<?php
class Route {
  function router() {
    if ($_SERVER['REQUEST_URI'] == '/') {
      require_once(CONTROLLER_DIR . '/top.php'); 
    } else if (preg_match('/\A(\/contact)(\?(.*))?\z/', $_SERVER['REQUEST_URI'])) {
      require_once(CONTROLLER_DIR . '/contact.php'); 
    } else if (preg_match('/\A(\/live2d)(\?(.*))?\z/', $_SERVER['REQUEST_URI'])) {
      require_once(CONTROLLER_DIR . '/live2d.php'); 
    } else if (preg_match('/\A(\/illustration)(\?(.*))?\z/', $_SERVER['REQUEST_URI'])) {
      require_once(CONTROLLER_DIR . '/illustration.php'); 

    } else if (preg_match('/\A(\/achievement)(\?(.*))?\z/', $_SERVER['REQUEST_URI'])) {
      require_once(CONTROLLER_DIR . '/achievement.php'); 
    } else {
      header("Location: /"); 
    }
  }
}

$route = new Route;
$route->router();
