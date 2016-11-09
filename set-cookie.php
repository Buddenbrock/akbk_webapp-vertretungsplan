<?php
  $import_timetable_config = true;

  include_once('assets/includes/config.php');

  $class_id = $_REQUEST['class_id'];
  $class_name = $class_name[($class_id - 1)];
  $color_id = $_REQUEST['color_id'];

  // Cookies werden 180 Tage gespeichert
  $save_time = time()+(3600*4320);

  setcookie("show-class-id", $class_id, $save_time);
  setcookie("show-class-name", $class_name, $save_time);
  setcookie("color-id", $color_id, $save_time);

  header('Location: index.php');
?>
