<?php
  $timetable = false;
  $import_timetable_config = false;


  include_once('assets/includes/config.php');

  $pagetitle = $navtitle_help;

  include_once('assets/includes/header.php');
?>

<main>
  <h1><?= $navtitle_help ?></h1>
  <p>
    <strong><?= $navtitle_timetable ?></strong><br>
    Hier wird der Stundenplan der unter <?= $navtitle_settings ?> gew&auml;hlten Klasse ausgegeben.
    Prim&auml;r wird der Plan der aktuellen Kalenderwoche dargestellt. &Uuml;ber die Button in der Kopfleiste, links und rechts des Schullogos, kann man die Kalenderwoche wechseln und vor oder zur&uuml;ck springen. Eine Darstellung vergangener Kalenderwochen ist nicht m&ouml;glich. Lediglich die Darstellung der aktuellen und der zwei Folge-Wochen ist m&ouml;glich.
  </p>
  <p>
    <strong><?= $navtitle_settings ?></strong><br>
    Unter dem Reiter <?= $navtitle_settings ?> w&auml;hlt man den Schulbildungsgang, zu dem der Stundenplan unter <?= $navtitle_timetable ?> angezeigt werden soll.
    Diese Einstellung wird f&uuml;r 4 Tage gespeichert. Nach Ablauf der Zeit muss die Einstellung der Klasse wieder neu gesetzt werden.
  </p>
  <p>
    <strong><?= $navtitle_print ?></strong><br>
    Sollte man den Stundenplan nicht nur in digitaler Form nutzen wollen, bietet die Funktion <?= $navtitle_print ?> eine schnelle Abhilfe. Sie &ouml;ffnet der Druckmen&uuml; des jeweiligen Ger&auml;tes. Hier r&uuml;ber kann auch ein PDF erstellt werden.
  </p>
  <p>
    <strong>Early Access</strong><br>
    Aktuell wird an dieser Web-Applikation und Schnittstelle zum AKBK Infopoint noch entwickelt und gearbeitet. Bis auf kleine Einschr&auml;nkungen ist die Nutzung aber schon voll m&ouml;glich.
  </p>
</main>

<?php
  include_once('assets/includes/footer.php');
?>