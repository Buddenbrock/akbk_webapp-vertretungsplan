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
  </form>

<hr>

  <!-- Konfiguration der Button -->
  <form class="button-config">
    <div class="row">
      <label for="button_1">Button 1</label>
      <div class="col-50">
        <input type="radio" name="button-1" value="1" id="button_1-1" checked>
          <label for="button_1-1"></label>
          Stundenplan<br>
        <input type="radio" name="button-1" value="2" id="button_1-2">
          <label for="button_1-2"></label>
          Stundenzeit<br>
        <input type="radio" name="button-1" value="3" id="button_1-3">
          <label for="button_1-3"></label>
          Hilfe<br>
        <input type="radio" name="button-1" value="4" id="button_1-4">
          <label for="button_1-4"></label>
          Datenschutz<br>
      </div>
      <div class="col-50">
        <input type="radio" name="button-1" value="5" id="button_1-5">
          <label for="button_1-5"></label>
          Impressum<br>
        <input type="radio" name="button-1" value="6" id="button_1-6">
          <label for="button_1-6"></label>
          Neuladen<br>
        <input type="radio" name="button-1" value="7" id="button_1-7">
          <label for="button_1-7"></label>
          Drucken<br>
        </div>
      </div>
<br>
      <div class="row">
        <label for="button_2">Button 2</label>
        <div class="col-50">
          <input type="radio" name="button-2" value="1" id="button_2-1">
            <label for="button_2-1"></label>
            Stundenplan<br>
          <input type="radio" name="button-2" value="2" id="button_2-2" checked>
            <label for="button_2-2"></label>
            Stundenzeit<br>
          <input type="radio" name="button-2" value="3" id="button_2-3">
            <label for="button_2-3"></label>
            Hilfe<br>
          <input type="radio" name="button-2" value="4" id="button_2-4">
            <label for="button_2-4"></label>
            Datenschutz<br>
        </div>
        <div class="col-50">
          <input type="radio" name="button-2" value="5" id="button_2-5">
            <label for="button_2-5"></label>
            Impressum<br>
          <input type="radio" name="button-2" value="6" id="button_2-6">
            <label for="button_2-6"></label>
            Neuladen<br>
          <input type="radio" name="button-2" value="7" id="button_2-7">
            <label for="button_2-7"></label>
            Drucken<br>
          </div>
        </div>
<br>
        <div class="row">
          <label for="button_3">Button 3</label>
          <div class="col-50">
            <input type="radio" name="button-3" value="1" id="button_3-1">
              <label for="button_3-1"></label>
              Stundenplan<br>
            <input type="radio" name="button-3" value="2" id="button_3-2">
              <label for="button_3-2"></label>
              Stundenzeit<br>
            <input type="radio" name="button-3" value="3" id="button_3-3">
              <label for="button_3-3"></label>
              Hilfe<br>
            <input type="radio" name="button-3" value="4" id="button_3-4">
              <label for="button_3-4"></label>
              Datenschutz<br>
          </div>
          <div class="col-50">
            <input type="radio" name="button-3" value="5" id="button_3-5">
              <label for="button_3-5"></label>
              Impressum<br>
            <input type="radio" name="button-3" value="6" id="button_3-6" checked>
              <label for="button_3-6"></label>
              Neuladen<br>
            <input type="radio" name="button-3" value="7" id="button_3-7">
              <label for="button_3-7"></label>
              Drucken<br>
            </div>
          </div>
<br>
          <div class="row">
            <label for="button_1">Button 4</label>
            <div class="col-50">
              <input type="radio" name="button-4" value="1" id="button_4-1">
                <label for="button_4-1"></label>
                Stundenplan<br>
              <input type="radio" name="button-4" value="2" id="button_4-2">
                <label for="button_4-2"></label>
                Stundenzeit<br>
              <input type="radio" name="button-4" value="3" id="button_4-3">
                <label for="button_4-3"></label>
                Hilfe<br>
              <input type="radio" name="button-4" value="4" id="button_4-4">
                <label for="button_4-4"></label>
                Datenschutz<br>
            </div>
            <div class="col-50">
              <input type="radio" name="button-4" value="5" id="button_4-5">
                <label for="button_4-5"></label>
                Impressum<br>
              <input type="radio" name="button-4" value="6" id="button_4-6">
                <label for="button_4-6"></label>
                Neuladen<br>
              <input type="radio" name="button-4" value="7" id="button_4-7" checked>
                <label for="button_4-7"></label>
                Drucken<br>
              </div>
            </div>

      <button type="submit">Speichern</button>
    </form>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
