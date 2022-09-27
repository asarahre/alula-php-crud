<?php
include "Conection.php";
try {
    $id        = $_POST["id"];
    $nome      = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf       = $_POST["cpf"];
    $sql = "UPDATE pessoa SET nome='{$nome}', sobrenome='{$sobrenome}', cpf='{$cpf}' where id='{$id}';";
    $pdo->prepare($sql)->execute();
    echo "true";
} catch (PDOException $e) {
    echo $e->getMessage();
}