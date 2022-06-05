<?php
session_start();
require_once __DIR__ . '/../db.php';
$file_path = __DIR__ . '/../img/users_images/';
function upload_file($file_name, $tmp_name)
{
    if (is_uploaded_file($tmp_name)){
        /**@var $file_path*/
        global $file_path;
        $destination = $file_path . $file_name;
        var_dump($destination);

        move_uploaded_file($tmp_name, $destination);
        /**@var $pdo*/
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO task18 (image) VALUE (:image)');
        $stmt->execute([':image' => $file_name]);
        $_SESSION['success'] = 'Картинка успешно загружена';

    } else {
        $_SESSION['error'] = "ошибка при добавлении изображения";

    }

}

for ($i = 0; $i <= count($_FILES['image']['name']); $i++ ) {
    $file_name = uniqid() . '.' .pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);//получаем расширение файла

    upload_file($file_name, $_FILES['image']['tmp_name'][$i]);
}
header("Location: /../task_20.php");
die();



