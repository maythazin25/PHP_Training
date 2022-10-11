
<?php

include('db_connect.php');
 if (isset($_POST["login"])) {
    $email = $_POST['email']; 
    $pwd = $_POST["password"];

    if(!empty($email) and !empty($pwd)) {
        $sql = "SELECT * from users where email = '$email' and password = '$pwd'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
           
        if($count == 1){  
            echo "<h3><center> Login successful </center></h3>";  
            header ("Refresh:1, URL=welcome.php");
        }  
        else{  
            echo "<center><h3> Login failed. Invalid email or password.</h3></center>";  
            header ("Refresh:2, URL=login.php");
        }     
    } else {
        echo "<center><h3> Please fill required fields</h3></center>";  
        header ("Refresh:2, URL=login.php");
    }
   
}    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="login.php" method="post">
                                <h3 class="mb-5">Sign in</h3>
                                <div class="form-outline mb-4">
                                    <input type="text" id="typeEmail"  name="email"
                                    class="form-control form-control-lg" placeholder="Email" />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePassword" name="password"
                                     class="form-control form-control-lg" placeholder="Password" />
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Login</button>
                                <br>
                                <br>
                                <a href="forget-password.php" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                                <br>
                                <br>
                                <a href="./register.php">Sign Up?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>