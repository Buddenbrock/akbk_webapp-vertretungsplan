<?php
  $timetable = false;
  $import_timetable_config = false;

  include_once('assets/includes/config.php');

  $pagetitle = $navtitle_impressum;

  include_once('assets/includes/header.php');
?>

<main>
  <h1>Unterrichtszeiten</h1>
  <p>
    <table class="lesson">
      <thead>
        <tr>
          <th>Stunde</th>
          <th>Zeit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1. Stunde</td>
          <td><time datetime="7:50" title="1. Stunde von">7:50</time> - <time datetime="8:35" title="1. Stunde bis">8:35</time></td>
        </tr>
        <tr>
          <td>2. Stunde</td>
          <td><time datetime="8:35" title="2. Stunde von">8:35</time> - <time datetime="9:20" title="2. Stunde bis">9:20</time></td>
        </tr>
        <tr>
          <td colspan="2">Pause</td>
        </tr>
        <tr>
          <td>3. Stunde</td>
          <td><time datetime="9:40" title="3. Stunde von">9:40</time> - <time datetime="10:25" title="3. Stunde bis">10:25</time></td>
        </tr>
        <tr>
          <td>4. Stunde</td>
          <td><time datetime="10:25" title="4. Stunde von">10:25</time> - <time datetime="11:10" title="4. Stunde bis">11:10</time></td>
        </tr>
        <tr>
          <td colspan="2">Pause</td>
        </tr>
        <tr>
          <td>5. Stunde</td>
          <td><time datetime="11:30" title="5. Stunde von">11:30</time> - <time datetime="12:15" title="5. Stunde bis">12:15</time></td>
        </tr>
        <tr>
          <td>6. Stunde</td>
          <td><time datetime="12:15" title="6. Stunde von">12:15</time> - <time datetime="13:00" title="6. Stunde bis">13:00</time></td>
        </tr>
        <tr>
          <td colspan="2">Pause</td>
        </tr>
        <tr>
          <td>7. Stunde</td>
          <td><time datetime="13:15" title="7. Stunde von">13:15</time> - <time datetime="14:00" title="7. Stunde bis">14:00</time></td>
        </tr>
        <tr>
          <td>8. Stunde</td>
          <td><time datetime="14:00" title="8. Stunde von">14:00</time> - <time datetime="14:45" title="8. Stunde bis">14:45</time></td>
        </tr>
        <tr>
          <td colspan="2">Pause</td>
        </tr>
        <tr>
          <td>9. Stunde</td>
          <td><time datetime="15:00" title="9. Stunde von">15:00</time> - <time datetime="15:45" title="9. Stunde bis">15:45</time></td>
        </tr>
        <tr>
          <td>10. Stunde</td>
          <td><time datetime="15:45" title="10. Stunde von">15:45</time> - <time datetime="16:30" title="10. Stunde bis">16:30</time></td>
        </tr>
      </tbody>
    </table>
  </p>
</main>

<?php
  include_once('assets/includes/footer.php');
?>
