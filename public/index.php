<?php
    session_start();
    if ($_GET['store']) {
        header("Location: /");
    } else {
        header('Location: ./website/index.php');
    }
?>