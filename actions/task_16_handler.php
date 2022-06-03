<?php
require_once __DIR__ . '/../db.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM task13 WHERE email = :email";
/**@var $pdo*/
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $email]);
$result = $stmt->fetch();

if (!$result){
    $_SESSION['error'] = 'Пользователь с таким именем не найден';
    header("location:/../task_16.php");
    die();
}
if (!password_verify($password, $result['password_hash'])){
    $_SESSION['error'] = 'Вы ввели неверный пароль';
    header("location:/../task_16.php");
    die();
}

$_SESSION['success'] = 'Добро пожаловать!';
header("location:/../task_16.php");
die();
