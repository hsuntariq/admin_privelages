<?php
include '../../assets/connection.php';
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://$hostname/revisionPHP/user/views/register.php")
?>