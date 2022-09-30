<!DOCTYPE html>
<html>

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