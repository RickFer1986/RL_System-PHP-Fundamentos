<?php

# Exemplo simples
$cores = array("Verde", "Amarelo", "Azul", "Vermelho", "Laranjado");

for($i=0; $i < 4; $i++){
    echo $cores[$i] . "<br>";
}

echo "===========================<br>";

# Usando Count
$cores = array("Azul", "Vermelho", "Amarelo", "Branco", "laranjado");

for($i=0; $i < count($cores); $i++){
    echo $cores[$i] . "<br>";
}

# Verifica quantas posições tem o Array
echo count($cores);




?>