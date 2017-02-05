<?php
  $timetable = false;
  $import_timetable_config = true;
  $i = 0;

  header("Content-Type: text/html; charset=utf-8");

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
    <input type="submit" value="Speichern">
  </form>

<hr>

  <!-- Konfiguration der Farbe -->
  <form action="set-cookie.php">
    <label for="color_id">Bitte wähle deine Primärfarbe</label>
    <div class="row">
      <input type="radio" name="color-id" value="#9a9997" id="color_1" <?php if($color=="#9a9997"){ ?> checked <?php } ?>>
        <label for="color_1" class="akbk_band"></label>
      <input type="radio" name="color-id" value="#8b2738" id="color_2" <?php if($color=="#8b2738"){ ?> checked <?php } ?>>
        <label for="color_2" class="hog_band"></label>
      <input type="radio" name="color-id" value="#dd0420" id="color_3" <?php if($color=="#dd0420"){ ?> checked <?php } ?>>
        <label for="color_3" class="koe_band"></label>
      <input type="radio" name="color-id" value="#c7007f" id="color_4" <?php if($color=="#c7007f"){ ?> checked <?php } ?>>
        <label for="color_4" class="ahr_band"></label>
      <input type="radio" name="color-id" value="#996699" id="color_5" <?php if($color=="#996699"){ ?> checked <?php } ?>>
        <label for="color_5" class="gol_band"></label>
      <input type="radio" name="color-id" value="#5b2282" id="color_6" <?php if($color=="#5b2282"){ ?> checked <?php } ?>>
        <label for="color_6" class="nmg_band"></label>
    </div>
    <div class="row">
      <input type="radio" name="color-id" value="#006eb7" id="color_7" <?php if($color=="#006eb7"){ ?> checked <?php } ?>>
      <label for="color_7" class="dmt_band"></label>
      <input type="radio" name="color-id" value="#10bae7" id="color_8" <?php if($color=="#10bae7"){ ?> checked <?php } ?>>
      <label for="color_8" class="ftr_band"></label>
      <input type="radio" name="color-id" value="#00847d" id="color_9" <?php if($color=="#00847d"){ ?> checked <?php } ?>>
      <label for="color_9" class="fog_band"></label>
      <input type="radio" name="color-id" value="#76b828" id="color_10" <?php if($color=="#76b828"){ ?> checked <?php } ?>>
      <label for="color_10" class="dbf_band"></label>
      <input type="radio" name="color-id" value="#00a983" id="color_11" <?php if($color=="#00a983"){ ?> checked <?php } ?>>
      <label for="color_11" class="bgb_band"></label>
    </div>
    <input type="submit" value="Speichern">
  </form>

  <hr>

  <!-- Verweise -->
  <h1>Über diese App</h1>
  <form>
    <a class="link button-link" href="mobile-save.php"><span>App unter Android und iOS speichern</span></a>
    <a class="link button-link" href="help.php"><span>Hilfe</span></a>
    <a class="link button-link" href="privacy.php"><span>Datenschutz</span></a>
    <a class="link button-link" href="impressum.php"><span>Impressum</span></a>
    <a class="info button-link" ><span>Version <?=($version)?></span></a>
  </form>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
