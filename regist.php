<?php
// Проверяем, было ли отправлено имя
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    // Очищаем введенные данные для безопасности
    $name = htmlspecialchars(trim($_POST['name']));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация завершена</title>
</head>
<body>
    <h1>Регистрация успешно завершена!</h1>
    <p>Добро пожаловать, <strong><?php echo $name; ?></strong>!</p>
    <p>Спасибо за регистрацию в нашем ресторане.</p>
    <a href="index.html">Вернуться на главную</a>
</body>
</html>
