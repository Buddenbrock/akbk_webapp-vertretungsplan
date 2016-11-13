<?php
  $timetable = false;
  $import_timetable_config = true;
  $i = 0;

  include_once('assets/includes/config.php');
  include_once('assets/includes/header.php');
?>

<main>
  <h1>Einstellungen</h1>

  <!-- Konfiguration der Klasse -->
  <form action="set-cookie.php">
    <label for="class_id">Bitte wähle deine Klasse</label>
    <select name="class_id">
      <?php while($i < $class_name_num) { ?>
      <option value="<?=($i+1)?>"><?=($class_name[$i])?></option>
      <?php $i++; } ?>
    </select>
    <button type="submit">Speichern</button>
  </form>

<hr>

  <!-- Konfiguration der Farbe -->
  <form action="set-cookie.php">
    <label for="color_id">Bitte wähle deine Primärfarbe</label>
    <div class="col-50">
      <input type="radio" name="color-id" value="#9a9997" id="color_1" checked>
        <label for="color_1"></label>
        <span class="akbk_band" >&nbsp;</span>
        grau<br>
      <input type="radio" name="color-id" value="#8b2738" id="color_2">
        <label for="color_2"></label>
        <span class="hog_band">&nbsp;</span>
        dunkelrot<br>
      <input type="radio" name="color-id" value="#dd0420" id="color_3">
        <label for="color_3"></label>
        <span class="koe_band">&nbsp;</span>
        rot<br>
      <input type="radio" name="color-id" value="#c7007f" id="color_4">
        <label for="color_4"></label>
        <span class="ahr_band">&nbsp;</span>
        magenta<br>
      <input type="radio" name="color-id" value="#996699" id="color_5">
        <label for="color_5"></label>
        <span class="gol_band">&nbsp;</span>
        hell-lila<br>
      <input type="radio" name="color-id" value="#5b2282" id="color_6">
        <label for="color_6"></label>
        <span class="nmg_band">&nbsp;</span>
        lila<br>
    </div>
    <div class="col-50">
      <input type="radio" name="color-id" value="#006eb7" id="color_7">
        <label for="color_7"></label>
        <span class="dmt_band">&nbsp;</span>
        blau<br>
      <input type="radio" name="color-id" value="#10bae7" id="color_8">
        <label for="color_8"></label>
        <span class="ftr_band">&nbsp;</span>
        hell-blau<br>
      <input type="radio" name="color-id" value="#00847d" id="color_9">
        <label for="color_9"></label>
        <span class="fog_band">&nbsp;</span>
        dunkel-grün<br>
      <input type="radio" name="color-id" value="#76b828" id="color_10">
        <label for="color_10"></label>
        <span class="dbf_band">&nbsp;</span>
        hell-grün<br>
      <input type="radio" name="color-id" value="#00a983" id="color_11">
        <label for="color_11"></label>
        <span class="bgb_band">&nbsp;</span>
        türkise<br>
    </div>
    <button type="submit">Speichern</button>
  </from>
  <hr>

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
