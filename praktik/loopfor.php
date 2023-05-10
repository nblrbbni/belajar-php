<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Belajar PHP</title>
  </head>
  <body>

    <?php
        // perulangan 1
        for($awal = 1; $awal <= 10; $awal++) {
            echo $awal . "<br>";
            }

        // perulangan 2
        for ($awalan = 1; ; $awalan++) {
            if ($awalan > 10) {
                break;
            }
            echo $awalan;
        }

        // perulangan 3
        $i = 1;
        for (; ; ) {
            if ($i > 10) {
                break;
            }
            echo $i;
            $i++;
        }
    ?>

  </body>
</html>
