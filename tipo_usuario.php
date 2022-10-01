<?php
    $descricao = isset($_GET['Descricao']) ? $_GET['Descricao'] : ''; // Existe?(Variável ?Verdaderiro :Falso)

    if ($descricao == ''){ //Teste descrição
        echo 'A descrição é obrigatória!';
        exit;
    }

    require_once 'conexao.php'; //Usar conexao.php

    if ($descricao == 'Desenvolvedor'){ //Verificar nível do Usuário
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 3);"; //Insert da Descrição
    }else{
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 3);";
    }
    if ($descricao == 'Administrador'){
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 2);";
    }else{
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 3);";
    }
    if ($descricao == 'Usuário'){
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 1);";
    }else{
        $sql = "Insert into tipo_usuario (Descricao,  Nivel)
	            Values ('$descricao', 3);";
    }

    if  ($conexao -> exec($sql)){ //Teste | Executar comando SQL
        echo 'Descrição salva com sucesso!';
    }else{
        echo 'Erro ao salvar!';
    }