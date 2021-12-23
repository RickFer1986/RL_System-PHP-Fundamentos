<?php

$arquivo_nome = "clientes.txt"; // Nome do arquivo a ser lido
$arquivo = fopen($arquivo_nome, "r");   // fopen: Abrir o arquivo r: somente leitura

?>



<table width="100%" background-color="#c0c0c0">
    <tr>
        <td>Nome</td>
    </tr>

    <?php
    
        while(!feof($arquivo)){  // feof: verifica se a leitura chegou até a linha final do arquivo

    ?>

    <tr style="background-color:#87CEEB">
        <td><?php echo fgets($arquivo); ?></td>
    </tr>

    <?php
    
        }
    
    ?>

</table>

<br>

<a href="criacao-texto.html">Novo Cliente</a>

<?php

fclose($arquivo);   // Fechando o arquivo txt

?>