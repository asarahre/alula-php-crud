<?php
try {
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=empresa;user=postgres;password=123');
} catch (PDOException $e) {
    var_dump($e->getMessage());
}