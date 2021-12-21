<?php
session_start();
$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];

$user = 'root';
$password = '';

$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1',$user,$password);

$query = "UPDATE users SET name = :name, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name
]);

if (!$status){
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else {
    $result = "Данные сохранены";
    $_SESSION['result'] = $result;
}

header("Location: ../pages/user.php?id=$userId");