<?php
// кое что конечно подзабыл, пришлось обратиться к уроку :-)
require_once __DIR__ . '/../db.php';
session_start();
$text = $_GET['text'];
/**@var $pdo */
$sql = 'SELECT * FROM task11 WHERE text = :text';
$stmt = $pdo->prepare($sql);
$stmt->execute([':text' => $text]);
$result = $stmt->fetch();
//$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

if (!empty($result)) {
    $_SESSION['error'] = 'Такой текст уже есть';
    header("Location: /../task_12.php");
    exit;
}
if ($_GET['text']) {
    $sql = "INSERT INTO `task11` (`text`) VALUE (:text)";
    /**@var $pdo*/
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':text' => $text]);
    $_SESSION['success'] = 'Запись отправлена';
}
header("Location: /../task_12.php");
exit();