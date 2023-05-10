<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet"/>
    <title>Belajar PHP</title>
  </head>
  <body>

    <?php
        define("fungsi", "Ini adalah cetakan hasil fungsi const dari fungsi");
        echo fungsi;

        echo "<br>";

        // define constanta array
        // php = array("array1", "array2") / ['array1', 'array2']
        define("arrayKelas", ["Kelas X", "Kelas XI", "Kelas XII"]);
        echo "saya adalah " . arrayKelas[1];

        echo "<br>";

        // define const function global
        define("name", "Merupakan contoh global fungsi definisi");
        function fungsi() {
            echo name;
        }
        fungsi();
    ?>

  </body>
</html>