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
        $stringTunggal = "Syahru, Ilham, Farhan, Alam";
        $explode = explode(",", $stringTunggal);
        print_r($explode); // Menjadi bentuk array dari string tunggal
    ?>

  </body>
</html>