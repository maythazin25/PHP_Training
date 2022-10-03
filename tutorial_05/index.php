<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial_05 | Reading Files</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    echo "<h2>Reading Text File</h2><br />";
    $filename = 'AllFile/text.txt';
    $f = fopen($filename, 'r');

    if ($f) {
        $contents = fread($f, filesize($filename));
        fclose($f);
        echo nl2br($contents);
    }

    echo "<br /><h2>Reading csv File</h2><br />";
    $file = fopen('AllFile/text.csv', 'r');

    if ($file !== FALSE) {

        echo "<table>\n";
        while (($data = fgetcsv($file, 100, ',')) !== FALSE) {
            echo "<tr>";
            for ($i = 0; $i < count($data); $i++) {
                echo "<td>" . $data[$i] . "</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";

        fclose($file);
    }


    ?>
</body>

</html>