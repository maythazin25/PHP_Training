<?php
include "db_connect.php";
if(isset($GET["id"])){
    $id = $GET["id"];
    $sql = "DELETE * FROM users WHERE id=$id";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
}

header("location: index.php");
exit;
?>