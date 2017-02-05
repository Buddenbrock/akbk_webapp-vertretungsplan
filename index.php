<?php

  $import_timetable_config = false;
  $link_pre = "";
  $kw_pre = "";
  $link_next = "";
  $kw_next = "";

// Ausgabe der Wochen-Button
  $timetable = true;

// Auslesen von Cookies
  $class_id = $_COOKIE["show-class-id"];
  $class_name = $_COOKIE["show-class-name"];
  $color_id = $_COOKIE["color-id"];
  if(($class_id == null) || ($class_name == null)){
    header('Location: read-classes.php');
  }
  $class_id = str_pad($class_id, 5 ,'0', STR_PAD_LEFT);

// Import der Config-Data
  include_once('assets/includes/config.php');

// Pläne auslesen
  $url_timetable = "http://www.akbk-infopoint.de/Klassenplan/" . $kw_now . "/c/c" . $class_id . ".htm";
  $content_timetable = implode('', file($url_timetable));

// Ausgabe Fallback
  if($content_timetable == null){
    $content_timetable = "<p>F&uuml;r diese Zeit liegt kein Plan vor.<p>";
  }

  header('Content-Type: text/html; charset=ISO-8859-1');

// Import des Seitenkopf
  include_once('assets/includes/header.php');
?>

<main>
  <p class="infobox">
    <strong>Early Access</strong><br>
    Aktuell wird an dieser Web-Applikation und Schnittstelle zum AKBK Infopoint noch entwickelt und gearbeitet. Bis auf kleine Einschr&auml;nkungen ist die Nutzung aber schon voll m&ouml;glich.
  </p>

  <h1>Stundenplan der KW <?=( $kw_now . " (" . $date . ")" )?></h1>
  <p>
    <strong>Klassenbezeichnung: <?=( $class_name )?></strong><br>
    <?=( $content_timetable )?>
  </p>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
