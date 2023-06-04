<?php
    session_start();
    include '../../assets/connection.php';
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $select = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($connection,$select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['success_msg'] = "Welcome " . $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['role'] = $row['role'];
        header("Location: http://$hostname/revisionPHP/user/views/home.php");
    }
