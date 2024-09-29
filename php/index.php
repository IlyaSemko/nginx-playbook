<?php
$servername = "mysql";
$username = "root";
$password = "passwd123";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Приложение подключено к MySQL.<br>";
}

$conn->close();

echo 'Текущая версия PHP: ' . phpversion() . '<br>';

echo "Запущенно с помощью Ansible";
?>