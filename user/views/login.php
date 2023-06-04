<?php
    session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot_css.php' ?> 
    <?php include '../../assets/boot_icons.php' ?> 
    <title>Home</title>
</head>
<body>
    <?php
     if(isset($_SESSION['success_msg'])){
        echo "<h1>" . $_SESSION['success_msg'] . "</h1>";
    }
    unset($_SESSION['success_msg']);
    include '../../assets/nav.php' ?>
    
    <div class="container position-relative col-lg-5 m-auto mt-5 shadow p-3">
        <form action="../controller/login.php" method="POST" enctype="multipart/form-data">
            <div class="logo position-absolute text-success" style="font-size:10rem;top:-20px;left:38%;z-index:-22">
            <i class="bi bi-person-circle"></i>
            </div>
            <h1 class="display-1 text-center mt-5">
                Login
            </h1>
           
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
            <input class="form-control my-3 bg-success text-light" type="submit" value="Login" >
            <h5>New to the app <a href="./register.php">Register</a> </h5>

        </form>
    </div>


    <?php include '../../assets/boot_js.php' ?>
</body>
</html>