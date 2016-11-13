<?php
  $timetable = false;
  $import_timetable_config = false;

    header("Content-Type: text/html; charset=utf-8");

  include_once('assets/includes/config.php');
  include_once('assets/includes/header.php');
?>

<main>
  <?php
    include('assets/includes/content/impressum.html');
    echo "<hr>";
    include('assets/includes/content/disclaimer.html');
  ?>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
