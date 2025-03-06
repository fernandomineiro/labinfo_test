<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'teste';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status ENUM('pendente', 'concluida') DEFAULT 'pendente'
)";
$conn->query($sql);