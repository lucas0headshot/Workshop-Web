<?php
    $descricao = isset($_GET['Descricao']) ? $_GET['Descricao'] : ''; // Existe?(Variável ?Verdaderiro :Falso)
    echo '->' . $descricao;

    if ($descricao == ''){ //Teste descrição
        echo 'A descrição é obrigatória!';
        exit;
    }