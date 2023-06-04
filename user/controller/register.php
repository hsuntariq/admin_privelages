<?php
    session_start();
    include '../../assets/connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fileName = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, '../../assets/images/' . $fileName);
    $insert = "INSERT INTO users (name,email,password,image) VALUES ('{$name}','{$email}','{$password}','{$fileName}')";
    mysqli_query($connection,$insert);
    $_SESSION['username'] = $name;
    $_SESSION['success_msg'] = "Welcome " . $name;
    header("Location: http://$hostname/revisionPHP/user/views/home.php")
    ?>