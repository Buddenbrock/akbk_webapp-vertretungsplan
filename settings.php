<?php
  $timetable = false;
  $import_timetable_config = true;
  $i = 0;

  include_once('assets/includes/config.php');
  $pagetitle = $navtitle_settings;
  include_once('assets/includes/header.php');
?>

<main>
  <h1><?= $navtitle_settings ?></h1>

  <form action="set-cookie.php">
    <label for="class_id">Bitte wähle deine Klasse</label>
    <select name="class_id">
      <?php while($i < $class_name_num) { ?>
      <option value="<?=($i+1)?>"><?=($class_name[$i])?></option>
      <?php $i++; } ?>
    </select>

    <label for="color_id">Bitte wähle deine Primärfarbe</label>
    <select name="color_id">
      <option value="#9a9997" class="akbk_band" selected>grau</option>
      <option value="#8b2738" class="hog_band">dunkelrot</option>
      <option value="#dd0420" class="koe_band">rot</option>
      <option value="#c7007f" class="ahr_band">magenta</option>
      <option value="#996699" class="gol_band">hell-lila</option>
      <option value="#5b2282" class="nmg_band">lila</option>
      <option value="#006eb7" class="dmt_band">blau</option>
      <option value="#10bae7" class="ftr_band">hellblau</option>
      <option value="#00847d" class="fog_band">dunkelgrün</option>
      <option value="#76b828" class="dbf_band">hellgrün</option>
      <option value="#00a983" class="bgb_band">türkis</option>
    </select>


    <hr>
    <h2>Button-Konfiguration</h2>

    <label for="button_1">Button 1</label>
    <input type="radio" name="button_1" value="1" checked> Stundenplan<br>
    <input type="radio" name="button_1" value="2"> Stundenzeiten<br>

    <select name="button_4">
      <option value="1" selected>Stundenplan</option>
      <option value="2">Stundenzeit</option>
      <option value="3">Hilfe</option>
      <option value="4">Datenschutz</option>
      <option value="5">Impressum</option>
      <option value="6">Drucken</option>
      <option value="7">Neuladen</option>
    </select>
    <label for="button_2">Button 2</label>
    <label for="button_3">Button 3</label>
    <label for="button_4">Button 4</label>

    <button type="submit"><?= $submit_text ?></button>
  </from>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
