<?php
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);

if ($url[1] == "fuel") {
  $content = file_get_contents("pages/fuel.html");
} else if ($url[1] == "action") {
  $content = file_get_contents("pages/action.html");
} else if ($url[1] == "restaurant") {
  $content = file_get_contents("pages/restaurant.html");
} else if ($url[1] == "404") {
  $content = file_get_contents("404.php");
} else {
  $content = file_get_contents("pages/index.php");
}

if (!empty($content)) {
  require_once("template.php");
}
