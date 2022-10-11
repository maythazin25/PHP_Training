<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial_04</title>
</head>

<body>
    <?php
    $uid = $_POST['userid'];
    $pw = $_POST['password'];
    if ($uid == 'may' and $pw == 'may25') {
        session_start();
        $_SESSION['sid'] = session_id();
        echo "Logged in successfully";
        echo "<br><a href=logout.php><input type='button' value=Logout></a>";
    }
    ?>
</body>

</html>