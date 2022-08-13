<?php

require 'config.php';

$tarefas = filter_input(INPUT_POST, 'tarefas');

if($tarefas) {
    $sql = $pdo->prepare("INSERT INTO tarefas (tarefas) VALUES (:tarefas)");
    $sql->bindValue(':tarefas', $tarefas);
    $sql->execute();

    header("Location: ../index.php");
}