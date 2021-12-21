Ano atual:
<select>
    <option>Selecione</option>
    <?php 
        for($ano = 2021; $ano >= 1986; $ano --){
            echo "<option>" . $ano . "</option>";
        }
    ?>
</select>