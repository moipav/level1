<?php
session_start();
require_once __DIR__ . '/../db.php';
$file_path = '/img/users_images/';

/**@var $pdo */


$stmt=$pdo->prepare("DELETE  FROM task18 WHERE id = :id");
$stmt->execute([':id' => $_GET['id']]);
$stmt->fetchAll();
header("Location: /../task_19.php");
die();