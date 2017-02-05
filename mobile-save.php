<?php
  $timetable = false;
  $import_timetable_config = false;

  header("Content-Type: text/html; charset=utf-8");

  include_once('assets/includes/config.php');
  include_once('assets/includes/header.php');
?>

<main>
  <h1>Wie speichere ich die Seite auf dem Homescreen</h1>

  <button class="android accordion">Android</button>
  <div class="panel">
    <h2>Schritt 1:</h2>
    <p>Als erstes muss das Browsermenü geöffnet werden.</p>
    <img src="assets/images/android-1.jpg">

    <h2>Schritt 2.</h2>
    <p>Als nächstes wählt man im Menü den Menüpunkt "Seite" aus.</p>
    <img src="assets/images/android-2.jpg">

    <h2>Schritt 3:</h2>
    <p>Nun sollte der Punkt "Zum Startbildschirm hinzufügen" gewählt werden.</p>
    <img src="assets/images/android-3.jpg">

    <p>Nun gibt es auf dem Startbildschirm das App-Icon.</p>
    <img src="assets/images/android-4.jpg">

    <h2>Im Chrome</h2>
    <p>Bei diesem Browser sind weniger Schritte nötig. Man ruft die gewünschte Seite auf, klickt oben rechts auf die Menüauswahl (die 3 Punkte) und wählt direkt "Zum Startbildschirm hinzufügen".</p>

    <h3>Grafiken: <a target="_blank" href="http://android-hilfe.info/lesezeichen-zum-startbildschirm-hinzufuegen/">android-hilfe.info</a></h3>
  </div>

  <button class="ios accordion">iOS</button>
  <div class="panel">
    <h2>Schritt 1:</h2>
    <p>Als Erstes muss auf das Teilen-Symbol gedrückt werden.</p>
    <img src="assets/images/apple-1.png">

    <h2>Schritt 2:</h2>
    <p>Nun kann der Menüpunkt "Zum Homebildschirm" gewählt werden.</p>
    <img src="assets/images/apple-2.png">

    <h2>Schritt 3:</h2>
    <p>Jetzt kann noch der angezeigte App-Namen angepasst werden. Ein Namensvorschlag ist allerdings schon hinterlegt. Nachem der Name geändert wurde oder auch nicht geändert wurde, muss jetzt nur noch auf "Hinzufügen" gedrückt werden.</p>
    <img src="assets/images/apple-3.png">
    <p>Nun gibt es auf dem Startbildschirm das App-Icon.</p>
    <img src="assets/images/apple-4.png">

    <h3>Grafiken: <a target="_blank" href="http://techmixx.de/iphone-ipad-webseite-als-app/">techmixx.de</a></h3>
  </div>

  <button class="windows accordion">Windows Phone</button>
  <div class="panel">
    <h2>Eine Anleitung für das Windows Phone folgt.</h2>
  </div>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
  </script>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
