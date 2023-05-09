<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $kalimatString = "Aku sedang berada pada materi string preg_match()";
        $cari = "/preg_match/";
        $gantikan = "preg_replace";
        echo preg_replace($cari, $gantikan, $kalimatString);

        echo "<br> <br>";

        $kalimatString = "Aku telah melalui pembelajaran javascript.";
        $cari = "/javascript/";
        $gantikan = "php";
        echo preg_replace($cari, $gantikan, $kalimatString);
    ?>

  </body>
</html>