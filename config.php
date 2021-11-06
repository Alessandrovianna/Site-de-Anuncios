<?php
session_start();
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=classificados;host=localhost", "root", "P63H65P");
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>