<?php
session_start();
if (!$_SESSION['counter']) $_SESSION['counter'] = 0;
if ($_POST['count'] == 1) {
    $_SESSION['counter']++;
    header("Location: /../task_15.php");
    die();
}