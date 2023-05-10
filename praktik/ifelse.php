<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="" rel="stylesheet"/>
    <title>Belajar PHP</title>
  </head>
  <body>

    <?php
        // if & else
        $nilai = 78;

        if ($nilai <= 75) {
            echo "Kamu dibawah KKM";
        } else {
            echo "Kamu sudah diatas KKM";
        }

        echo "<br><br>";

        // if, elseif & else
        $jam = 4; 

        if ($jam <= 11) {
            echo "Selamat Pagi";
        } elseif ($jam <= 15) {
            echo "Selamat Siang";
        } elseif ($jam <= 18) {
            echo "Selamat Sore";
        } else {
            echo "Selamat Malam";
        }

        echo "<br><br>";

        // if, elseif & else
        $nilai = 98;

        if ($nilai >= 90) {
            echo "Selamat, kamu mendapat nilai sempurna (A)";
        } elseif ($nilai >= 85) {
            echo "Selamat, kamu mendapat nilai bagus (B)";
        } elseif ($nilai >= 80) {
            echo "Selamat, kamu mendapat nilai cukup bagus (C)";
        } elseif ($nilai >= 75) {
            echo "Selamat, kamu mendapat nilai kurang bagus (D)";
        } else {
            echo "Selamat, kamu remedial";
        }
    ?>

  </body>
</html>