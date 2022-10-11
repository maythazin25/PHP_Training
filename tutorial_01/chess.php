<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial_01 | Chessboard</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <table>
            <?php
            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++) {
                    $board = $row + $col;
                    if ($board % 2 == 0) {
                        echo '<td class="SquareWhite"></td>';
                    } else {
                        echo '<td class="SquareBlack"></td>';
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>