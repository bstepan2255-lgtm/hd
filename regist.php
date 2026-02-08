<?php
// regist.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';

    // Тут можно сохранить в БД или файл
    // file_put_contents('registrations.txt', $name . PHP_EOL, FILE_APPEND);

    // Перенаправление обратно на страницу регистрации или на другую страницу
    header('Location: /registration_success.html'); // если есть страница благодарности
    exit;
}
?>
