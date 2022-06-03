<?php
session_start();
if (!empty($_POST['text'])) {
    $_SESSION['text'] = $_POST['text'];
}
//$_SESSION['text'] = (!empty($_POST['text']))? :$_POST['text'];
header("Location:/../task_14.php");
die();