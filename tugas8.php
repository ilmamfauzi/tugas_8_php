<?php for ($x = 0; $x <= 97; $x++) { ?>
  <p align="center" style="display:inline-block">
    <?php
    for ($i = 0; $i <= 10; $i++) {
      for ($j = $i; $j >= 0; $j--) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = 0; $i <= 9; $i++) {
      for ($j = $i; $j <= 9; $j++) {
        echo "*";
      }
      echo "<br>";
    }
    ?>
  </p>
<?php } ?>