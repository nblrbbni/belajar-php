<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $arrayKelompok = array("Asep", "Jamal", "Rabbani", "Jayawardana");
        $implode = implode("/", $arrayKelompok);
        echo "1. Daftar nama kelompok pertama: " . $implode;

        echo "<br> <br>";

        $arrayBahasa = ["html", "css", "javascript", "php"];
        $implode = implode("-", $arrayBahasa);
        echo "2. Bahasa pemograman yang sering digunakan: " . $implode;
    ?>

  </body>
</html>