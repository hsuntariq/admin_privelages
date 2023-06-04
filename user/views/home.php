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
    <title>Home</title>
</head>
<body>
<?php
     if(isset($_SESSION['success_msg'])){
        echo "<h1>" . $_SESSION['success_msg'] . "</h1>";
    }
    unset($_SESSION['success_msg']);
    include '../../assets/nav.php' ?>
    



    <?php include '../../assets/boot_js.php' ?>
</body>
</html>