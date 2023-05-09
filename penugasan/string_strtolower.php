<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $karakter = "Saat ini Saya Sudah Mencapai Materi php";
        echo "1. Karakter sebelumnya :" . $karakter. "<br>";
        echo "Karakter yang di ubah menjadi huruf kecil: " . strtolower($karakter);

        echo "<br> <br>";

        $karakter = "Aku telah melalui tahapan BELAJAR php string, sekarang telah mencapai tahapan STRTOLOWER()";
        echo "2. Karakter sebelumnya :" . $karakter. "<br>";
        echo "Karakter yang di ubah menjadi huruf kecil: " . strtolower($karakter);
    ?>

  </body>
</html>