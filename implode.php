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
        $arrayTampung = array("Bintang", "Arya", "Arif", "Syahru");
        $implode = implode("-", $arrayTampung);
        echo $implode;
    ?>

  </body>
</html>