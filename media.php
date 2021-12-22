<?php

$nome = trim($_POST['nome']); // TRIM: retira os espaços em branco
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

if($nome == ""){
    echo "Preencha o campo nome";
    exit;
}

// verificando se o dado digitado é um numero
if(!is_numeric($nota1)){
    echo "Preencha a nota 01";
    exit;
}
if(!is_numeric($nota2)){
    echo "Preencha a nota 02";
    exit;
}
if(!is_numeric($nota3)){
    echo "Preencha a nota 03";
    exit;
}
if(!is_numeric($nota4)){
    echo "Preencha a nota 04";
    exit;
}
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media >= 6){
    echo "O (A) Aluno(a) " .$nome. " está Aprovado com a média " . $media;
}else{
    echo "O (A) Aluno(a) " .$nome. " está Reprovado com a média " . $media;
}



echo "<br><br>";

?>

<a href="media.html"><button>Voltar</button></a>