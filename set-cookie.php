<?php
  $timetable = false;
  $import_timetable_config = true;

  include_once('assets/includes/config.php');

  // Cookies werden 180 Tage gespeichert
  $save_time_long = time()+(3600*4320);

  // Cookies werden 20 Tage gespeichert
  $save_time_short = time()+(3600*480);


  if(isset($_REQUEST['class_id'])){
    $class_id = $_REQUEST['class_id'];
    $class_name = $class_name[($class_id - 1)];

    setcookie("show-class-id", $class_id, $save_time_short);
    setcookie("show-class-name", $class_name, $save_time_short);
  }

  if(isset($_REQUEST['color-id'])){
    $color_id = $_REQUEST['color-id'];

    setcookie("color-id", $color_id, $save_time_long);
  }

  if(isset($_REQUEST['button_1']) && isset($_REQUEST['button_2']) && isset($_REQUEST['button_3']) && isset($_REQUEST['button_4'])){
    $button_1 = $_REQUEST['button_1'];
    $button_2 = $_REQUEST['button_2'];
    $button_3 = $_REQUEST['button_3'];
    $button_4 = $_REQUEST['button_4'];

    setcookie("button_1", $button_1, $save_time_long);
    setcookie("button_2", $button_2, $save_time_long);
    setcookie("button_3", $button_3, $save_time_long);
    setcookie("button_4", $button_4, $save_time_long);
  }

  header('Location: index.php');
?>
