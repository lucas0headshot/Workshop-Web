<?php
    $conexao = new PDO('mysql:local=localhost; port=3308; dbname=workshop_web', 'root', ''); //PDO =  PHP DATABASE OBJECT | 'local;  porta;  nome'  'usuário'  'senha'

    if (!$conexao){ //Teste conexão
        echo 'Conexão com Banco de Dados falhou!';
        exit;
    }