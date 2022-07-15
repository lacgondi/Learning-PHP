<?php 
    session_start();

    session_destroy();
    header('Location: /learning-php/13_sessions.php');
?>