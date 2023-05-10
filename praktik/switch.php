<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Belajar PHP</title>
  </head>
  <body>

    <?php
        $hari = "Sabtu";
        switch ($hari) {
            case "Senin":
                echo "Hari ini adalah hari Senin";
                break;
            
            case "Selasa":
                echo "Hari ini adalah hari Selasa";
                break;
                    
            case "Rabu":
                echo "Hari ini adalah hari Rabu";
                break;

            case "Kamis":
                echo "Hari ini adalah hari Kamis";
                break;

            case "Jumat":
                echo "Hari ini adalah hari Jumat";
                break;

            default:
                echo "Hari ini weekend, aku ingin turu!";
                break;
        }
    ?>

  </body>
</html>
