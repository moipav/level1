<?php
session_start();
require_once __DIR__ . '/../db.php';

$file_name = uniqid() . '.' .pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);//получаем расширение файла
$file_path = __DIR__ . '/../img/users_images/';
if (is_uploaded_file($_FILES['image']['tmp_name'])){
    $destination = $file_path . $file_name;
    var_dump($destination);

    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    /**@var $pdo*/
    $stmt = $pdo->prepare('INSERT INTO task18 (image) VALUE (:image)');
    $stmt->execute([':image' => $file_name]);
    $_SESSION['success'] = 'Картинка успешно загружена';
    header("Location: /../task_18.php");
    die();
} else {
    $_SESSION['error'] = "ошибка при добавлении изображения";
    header("Location: /../task_18.php");
    die();
}




