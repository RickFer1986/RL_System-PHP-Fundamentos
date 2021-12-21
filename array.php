<?php

    # Primera forma de apresentar Array
    $cores = array("Azul", "Vermelho", "Verde", "Amarelo");
    
    echo $cores['0'];
    echo "<br>";
    echo $cores['3'];
    echo "<br>";
    echo $cores['2'];
    echo "<br>";
    echo $cores['1'];
    echo "<br>";
    
    # Segundo forma de apresenatar Array (Não declaro os parametros no inicio)
    
    $ano = array(); // Posso não declarar essa linha no inicio
    
    $ano[] = "2021";
    $ano[] = "2020";
    $ano[] = "2019";
    $ano[6] = "2015";
    
    echo $ano[6];
    
    echo "<br>";
    
    # Terceira forma de apresentar Array
    $nome = array(0 => "Ricardo", 1 => "Pamela", 2 => "Asafe", 3 => "Nicolas");
    
    echo $nome[2];
    
    echo "<br>";
    # Terceira forma de apresentar Array

    $contagem = array(1,2,3,4,5);

    echo $contagem[4];
?>