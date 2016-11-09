<html>
  <head>
    <style>
    * {
      visibility: hidden;
      background-color: #f5f5f5;
    }

    </style>
  </head>
  <body>
    <h1>Leider kann die Seite momentan nicht geladen werden. Bitte versuchen Sie es später noch einmal.</h1>
    <?php
    // Auslesen der Seite für Classen
      $url_classes = "http://www.akbk-infopoint.de/Klassenplan/frames/navbar.htm";
      $content_classes = implode('', file($url_classes));

    // Ausgabe des ausgelesenen Seitenscript
      echo $content_classes;
    ?>
    <script>
      document.cookie = 'cookie-classes='+classes+'';
      document.write( classes );
      document.location.href = "settings.php";
    </script>
  </body>
</html>
