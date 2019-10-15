<?php
$login = filter_var(trim($_POST['number']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 8 || mb_strlen($login) > 30)
{
    echo "Недопустимая длинна номера";
    exit();
}
$mysql = new mysqli("localhost", "root", "", "test_login");

$res = $mysql->query("INSERT INTO `users`(`login`, `password`) VALUES ('$login', '".password_hash($pass, PASSWORD_DEFAULT)."')");
if ($res) {
    echo "SUCCESS";
} else {
    echo $mysql->error;
}

$mysql->close();
?>