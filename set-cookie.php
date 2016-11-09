<?php
  $import_timetable_config = true;

  include_once('assets/includes/config.php');

  $class_id = $_REQUEST['class_id'];
  $class_name = $class_name[($class_id - 1)];
  $color_id = $_REQUEST['color_id'];

  // Cookies werden 180 Tage gespeichert
  $save_time_long = time()+(3600*4320);

  // Cookies werden 20 Tage gespeichert
  $save_time_short = time()+(3600*480);

  setcookie("show-class-id", $class_id, $save_time_short);
  setcookie("show-class-name", $class_name, $save_time_short);
  setcookie("color-id", $color_id, $save_time_long);

  header('Location: index.php');
?>
