<?php

# ucfirst: transforma a primeira letra em maiusculo
# ucwords: transforma a primeira letra de cada palavra em maiusculo
# strtolower: transforma todas as letra em minusculo
# strtoupper: transforma todas as letras em maiusculo

$nome = trim(ucwords(strtolower($_POST['nome'])));

if($nome == ""){
    echo "Preencha o campo nome";
    exit;
}


# Gravar arquivo
$arquivo_nome = "clientes.txt";
$arquivo = fopen($arquivo_nome, "a");

fwrite($arquivo, $nome. "\r\n");
fclose($arquivo);

echo "<br><br>";

header("Location: listar.php");

?>





<a href="criacao-texto.html"><button>Voltar</button></a>