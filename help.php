<?php
  $timetable = false;
  $import_timetable_config = false;

  header("Content-Type: text/html; charset=utf-8");

  include_once('assets/includes/config.php');
  include_once('assets/includes/header.php');
?>

<main>
  <h1>Hilfe</h1>
  <p>
    <strong>Stundenplan</strong><br>
    Hier wird der Stundenplan der unter Einstellungen gew&auml;hlten Klasse ausgegeben.
    Prim&auml;r wird der Plan der aktuellen Kalenderwoche dargestellt. &Uuml;ber die Button in der Kopfleiste, links und rechts des Schullogos, kann man die Kalenderwoche wechseln und vor oder zur&uuml;ck springen. Eine Darstellung vergangener Kalenderwochen ist nicht m&ouml;glich. Lediglich die Darstellung der aktuellen und der zwei Folge-Wochen ist m&ouml;glich.
  </p>
  <p>
    <strong>Einstellungen</strong><br>
    Unter dem Reiter Einstellungen w&auml;hlt man den Schulbildungsgang, zu dem der Stundenplan unter Stundenplan angezeigt werden soll.
    Diese Einstellung wird f&uuml;r 4 Tage gespeichert. Nach Ablauf der Zeit muss die Einstellung der Klasse wieder neu gesetzt werden.
  </p>
  <p>
    <strong>Drucken</strong><br>
    Sollte man den Stundenplan nicht nur in digitaler Form nutzen wollen, bietet die Funktion Drucken eine schnelle Abhilfe. Sie &ouml;ffnet der Druckmen&uuml; des jeweiligen Ger&auml;tes. Hier r&uuml;ber kann auch ein PDF erstellt werden.
  </p>
  <p>
    <strong>Early Access</strong><br>
    Aktuell wird an dieser Web-Applikation und Schnittstelle zum AKBK Infopoint noch entwickelt und gearbeitet. Bis auf kleine Einschr&auml;nkungen ist die Nutzung aber schon voll m&ouml;glich.
  </p>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
