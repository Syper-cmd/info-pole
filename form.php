<?php
print_r($_POST);

$mysql = new mysqli("localhost", "root", "root", "main");

$result =  $mysql->query("SELECT * FROM users WHERE login='".trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS))."'"." AND password='".trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS))."'");

if ($result->num_rows > 0) {
    header("Location: admin-panel.php");
} else {
    header("Location: error.php?id=0");
}