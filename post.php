<?php

$numero1 = isset($_POST['n1']) ? $_POST['n1'] : "Sem valor";
$numero2 = isset($_POST['n2']) ? $_POST['n2'] : "Sem valor";

$soma = $numero1 + $numero2;
echo $soma . "<br>";

print_r($_POST);

?>
<br>
<br>
<a href="post-form.html">VOLTAR</a>