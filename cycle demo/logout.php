<?php
    session_start();
?>
<?php
    include 'connection.php';
    session_unset();
    header("Location: login.php");
?>