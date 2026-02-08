<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';

    // При желании сохранить данные

    // Редирект на страницу благодарности/успеха
    header('Location: https://bstepan2255-lgtm.github.io/hd/');
    exit;
}
?>
