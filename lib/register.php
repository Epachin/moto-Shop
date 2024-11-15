<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($username) < 2) {
    echo "username error";
    exit;
}
if (strlen($email) < 2 || !str_contains($email, '@')) {
    echo "email error";
    exit;
}
if (strlen($password) < 2) {
    echo "password error";
    exit;
}

$salt = '56s89_))(*$-890sdfsdg6742(!*&#@$09AQU';
$password = md5($salt . $password);

require "db.php";

$sql = 'INSERT INTO users(username, email, password) VALUES(?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $password]);

// Перенаправление на главную страницу
header("Location: /Car%20shop/index.php");
exit;
