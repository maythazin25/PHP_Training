<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tutorial_06 | Upload Image</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <form action='' method="POST" enctype="multipart/form-data">
    <label>Upload Image:</label>
    <br /><br />
    <input type="file" name="img_upload">
    <br /><br />
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $img_name = $_FILES['img_upload']['name'];
    $tmp_img_name = $_FILES['img_upload']['tmp_name'];
    $folder = 'Photo/';
    $file_type = $_FILES['imag_upload']['type'];
    $file_ext = explode('.', $img_name);
    $img_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'png');
    if (in_array($img_ext, $allowed)) {
      move_uploaded_file($tmp_img_name, $folder . $img_name);
    } else {
      echo "Image Type is Invalid!";
    }
  }
  ?>
</body>

</html>