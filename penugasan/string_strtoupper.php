<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $karakter = "Saat ini saya sudah mencapai materi php";
        echo "1. Karakter sebelumnya :" . $karakter. "<br>";
        echo "Karakter yang di ubah menjadi huruf besar: " . strtoupper($karakter);

        echo "<br> <br>";

        $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strtoupper()";
        echo "2. Karakter sebelumnya :" . $karakter. "<br>";
        echo "Karakter yang di ubah menjadi huruf besar: " . strtoupper($karakter);
    ?>

  </body>
</html>