<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet"/>
    <title>Belajar PHP</title>
  </head>
  <body>

    <?php
        $kalimatString = "Saat ini sudah belajar Laravel";
        $cari = "/sudah/";
        $gantikan = "belum";
        
        echo preg_replace($cari, $gantikan, $kalimatString);

        // Ini contoh penggunaan 1
        echo preg_replace("/sudah/", "belum", "Karakter spongebob sudah selesai");
    ?>

  </body>
</html>