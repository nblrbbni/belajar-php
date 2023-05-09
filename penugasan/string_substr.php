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
        echo "1. Karakter yang diambil: " . substr($karakter, 0, 10);

        echo "<br> <br>";

        $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr";
        echo "2. Karakter yang diambil: " . substr($karakter, 3, 20);
    ?>

  </body>
</html>