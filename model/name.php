<?php
session_start();
include '../controller/conect.php';
/
   
    $send = filter_input(INPUT_POST, 'SendPlayer');
    if($send){
        $nome = filter_input(INPUT_POST, 'nome');

        $insert = "INSERT INTO tb_player(player_nick) VALUES (:nick)";

        $result = $pdo->prepare($insert);
        $result->bindParam('nick', $nome, PDO::PARAM_STR);
        if($result->execute()){

        header('location: tetris.php');

    } else {

        $_SESSION['play'] = "n deu certo";
        header('location: index.php');
        }
    }
