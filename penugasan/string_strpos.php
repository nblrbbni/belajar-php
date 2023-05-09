<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $strPos = "Saat ini saya sudah mencapai materi php";
        $searchStrPos = "php";
        $notsearchStrPos = "javascript";
        echo "1. Kata kunci php: " . strPos($strPos, $searchStrPos) . "<br>"; 
        echo "1. Kata kunci javascript: " . strPos($strPos, $notsearchStrPos);

        echo "<br> <br>";

        $strPos = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos";
        $searchStrPos = "belajar php string";
        $notsearchStrPos = "strlen";
        echo "2. Kata kunci belajar php string: " . strPos($strPos, $searchStrPos) . "<br>"; 
        echo "2. Kata kunci strlen: " . strPos($strPos, $notsearchStrPos);
    ?>

  </body>
</html>