<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tutorial_04 | Age Calculation</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2>Calculate Your Age</h2>
  <?php
  $dob = $_POST['dob'] ?? '';
  $status = '';
  $bday = new DateTime($dob);

  if ($status == '') {
    $today = new DateTime();
    $diff = $today->diff($bday);
    $status = $diff->format('You are %Y years, %m months and %d days old.');
  }
  if ($bday > $today) {
    $status = 'Your Birthdate is not invalid!Please check again.';
  }
  ?>

  <form method="POST">
    <label>Your Date of Birth</label>
    <br /><br />
    <input type="date" name="dob" placeholder="mm/dd/yy">
    <br /><br />
    <input type="submit" name=submit value="Calculate Age">
  </form>
  <p><b><?= $status ?></b></p>
</body>

</html>