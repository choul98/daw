<?php
    session_start();
    $_SESSION['ID'] = null;
    header("Location: ../index.php");
?>