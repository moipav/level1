<?php
require_once __DIR__ . '/../db.php';
/**@var $pdo*/
session_start();
var_dump($_POST);
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (empty($email)) $_SESSION['email_error'] = 'Поле email не должно быть пустым';
if (empty($password)) $_SESSION['password_error'] = 'Поле password не должно быть пустым';
$sql = 'SELECT * FROM task13 WHERE email = :email';
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $email]);
$result = $stmt->fetch();

if (!empty($result)){
    $_SESSION['email_error'] = 'Пользователь с таким email уже зарегестрирован';
    header("Location: /../task_13.php");
    exit();
}

if (empty($_SESSION['email_error']) && empty($_SESSION['password_error'])) {
    $sql = 'INSERT INTO task13 (email, password_hash) VALUES (:email, :password_hash)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email,
        ':password_hash' => $password
    ]);
    $_SESSION['success'] = 'Пользователь успешно зарегестрирован';
    header("Location: /../task_13.php");
    exit();
}

