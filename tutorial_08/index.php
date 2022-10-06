<?php
  require_once "db_connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 08 | Online Shopping </title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
        <h2>Users List</h2>
        <a href="create.php" class="btn btn-primary">New User</a>
        <br />
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Status</th>
            </tr>

            
<?php
  $sql = "select * from users";
    $result = ($mysqli->query($sql));

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
            $created_at = $row['created_at'];
            $updated_at = $row['updated_at'];

        
            echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>               
                <td>'.$address.'</td>
                <td>'.$created_at.'</td>
                <td>'.$updated_at.'</td>
                <td>
                <button class= "cmn-btn edit"><a href= "user-edit.php?updateid='.$id.'">Edit</a></button>
                <button class= "cmn-btn delete"><a href= "user-delete.php?deleteid='.$id.'">Delete</a></button>
                </td>
            </tr>
            ';
        }; 
 }


 ?>
</table>
</div>
</body>
</html>