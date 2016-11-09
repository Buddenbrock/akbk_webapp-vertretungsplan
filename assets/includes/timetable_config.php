<?php
// Auslesen des Cookie
  $cookie_classes = $_COOKIE["cookie-classes"];

// Umwandeln des Cookie String in ein Array
  $class_name = explode(",", $cookie_classes);

// Ermitteln der Array Pos-Anzahl
  $class_name_num = count($class_name);
?>
