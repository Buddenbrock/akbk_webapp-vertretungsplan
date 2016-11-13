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
    Hier wird der Stundenplan der unter Einstellungen gewählten Klasse ausgegeben.
    Primär wird der Plan der aktuellen Kalenderwoche dargestellt. Über die Button in der Kopfleiste, links und rechts des Schullogos, kann man die Kalenderwoche wechseln und vor oder zurück springen. Eine Darstellung vergangener Kalenderwochen ist nicht möglich. Lediglich die Darstellung der aktuellen und der zwei Folge-Wochen ist möglich.
  </p>
  <p>
    <strong>Einstellungen</strong><br>
    Unter dem Reiter Einstellungen wählt man den Schulbildungsgang, zu dem der Stundenplan unter Stundenplan angezeigt werden soll.
    Diese Einstellung wird für 20 Tage gespeichert. Nach Ablauf der Zeit muss die Einstellung der Klasse wieder neu gesetzt werden.
  </p>
  <p>
    <strong>Drucken</strong><br>
    Sollte man den Stundenplan nicht nur in digitaler Form nutzen wollen, bietet die Funktion Drucken eine schnelle Abhilfe. Sie öffnet der Druckmenü des jeweiligen Gerätes. Hier rüber kann auch ein PDF erstellt werden.
  </p>
  <p>
    <strong>Early Access</strong><br>
    Aktuell wird an dieser Web-Applikation und Schnittstelle zum AKBK Infopoint noch entwickelt und gearbeitet. Bis auf kleine Einschränkungen ist die Nutzung aber schon voll möglich.
  </p>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
