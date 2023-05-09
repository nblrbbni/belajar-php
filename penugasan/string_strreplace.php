<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Penugasan PHP</title>
  </head>
  <body>

    <?php
        $karakter = "Kita sedang belajar javascript";
        echo "Karakter sebelum diubah: " . $karakter . "<br>";
        echo "Karakter setelah diubah: ";
        // echo "Jumlah karakter: " . str_replace($karakter, "strlen", "str_replace");
        $strreplace = str_replace("javascript", "php", $karakter);
        print_r($strreplace);
    ?>

  </body>
</html>