<?php
echo $_FILES['image']['type'];

$allowed_file_types = ["image/jpeg", "image/png", "image/gif", "image/webp"];
$sql = new mysqli("localhost", "root", "root", "main");

if ($sql->connect_error) {
    die("Ошибка подключения к базе данных: " . $sql->connect_error);
}

if (!in_array($_FILES['image']['type'], $allowed_file_types)) {
    header("Location: error.php?id=1");
    exit(); // Важно завершить выполнение скрипта после редиректа
} else {
    $upload_dir = "upload\\";
    $filename = uniqid() . "_" . $_FILES['image']['name']; // Генерируем уникальное имя
    $destination = $upload_dir . $filename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
        // Экранируем данные перед вставкой в SQL
        $title = $sql->real_escape_string($_POST['title']);
        $shortDescription = $sql->real_escape_string($_POST['shortDescription']);
        $longDescription = $sql->real_escape_string($_POST['longDescription']);
        $imageUrl = $sql->real_escape_string($destination); // Используем $destination

        $query = "INSERT INTO `data` (`title`, `shortDescription`, `longDescription`, `imageUrl`) VALUES ('$title', '$shortDescription', '$longDescription', '$imageUrl')";

        if ($sql->query($query)) {
            // Успешная вставка
            header("Location: /"); // Перенаправь на страницу успеха
            exit();
        } else {
            // Ошибка при вставке
            header("Location: error.php?id=2");
            exit();
        }
    } else {
        // Ошибка при перемещении файла
        header("Location: error.php?id=2");
        exit();
    }
}