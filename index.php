<?php
session_start();
if(isset($_POST["operation"])) {
    header("Location: /TP 28-11/operations.php");
        die;
}
?>