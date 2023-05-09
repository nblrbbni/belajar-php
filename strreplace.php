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
        $karakter = "Belajar PHP menggunakan strlen()";
        echo "Karakter sebelum di ubah: " . $karakter;
        echo "\n";
        echo "Jumlah karakter: " . str_replace($karakter, "strlen", "str_replace");
    ?>

  </body>
</html>