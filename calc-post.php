<?php

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$tipoOperacao = $_POST['operacao'];
//$soma = $numero1 + $numero2;

if($tipoOperacao == "+"){
    $result = $numero1 + $numero2;
}elseif($tipoOperacao == "-"){
    $result = $numero1 - $numero2;
}elseif($tipoOperacao == "/"){
    $result = $numero1 / $numero2;
}elseif($tipoOperacao == "*"){
    $result = $numero1 * $numero2;
}else{
    echo "Termos invalidos!";
}

echo $result;

//print_r($_POST);

?>
<br>
<br>
<a href="calc-post.html">VOLTAR</a>