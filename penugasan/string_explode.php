<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $stringKelompok = "Azizi, Nabil, Freya, Agus";
        $explode = explode(",", $stringKelompok);
        print_r($explode); 

        echo "<br> <br>";

        $stringBahasa = "html-css-javascript-php";
        $explode = explode("-", $stringBahasa);
        print_r($explode);
    ?>

  </body>
</html>