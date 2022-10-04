<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tutorial 07 | QR Code</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <form action="index.php" method="POST">
    <h2 class="title">Create QR Code</h2>
    <br />
    <input type="text" name="name" placeholder="Enter your name" class="input">
    <br /><br />
    <input type="text" name="text" placeholder="Enter your text" class="input">
    <br /><br />
    <input type="submit" name="submit" value="Generate" class="input btn_submit">
    <br /><br />
  </form>
  <?php
  include('phpqrcode/qrlib.php');
  if (isset($_POST['submit']) && !empty($_POST['name'] && $_POST['text'] && $_POST['submit'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $codeContents = $name . $text;
    $tempDir = "QRImage/";
    $fileName = $name . '.png';
    $filePath = $tempDir . $fileName;
    echo "<br /><h2 class='input'>Get Your QR Code!</h2>";
    echo "<br /><br />";
  ?>
    <img src="QRImage/<?php echo $_POST['name'] ?>.png" alt="QR Image" class="img_qr">
  <?php
    QRcode::png($codeContents, $filePath);
  } else {
    echo "<br /><h2 class='text'>Fill the instructions to get your QR Code!</h2>";
  }

  ?>
</body>

</html>