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
    <button type="submit"><?= $submit_text ?></button>
  </from>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
