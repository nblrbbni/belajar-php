<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON PHP</title>
</head>
<body>

    <?php 
    $kelas = array(
    // 'key' => 'value'
    'X' => 'Kelas X',
    'XI' => 'Kelas XI',
    'XII' =>  'Kelas XII',
    'XIII' =>  'Kelas XIII',
    'XIV' =>  'Kelas XIV',

    );

    // kelas X, kelas XI, kelas XII
    // Pakai foreach untuk perulangan data keas aray
    foreach ($kelas as $array) {
        echo $array . "<br>";
    }
    echo json_encode($kelas);

    echo "<br>";

    $kelasDecode = '{"X" : 1, "XI" : 2, "XII" : 3}';
    var_dump(json_decode($kelasDecode));

    echo '<br>';

    $object = json_decode($kelasDecode);
    print $object -> {'X'};
    ?>

</body>
</html>