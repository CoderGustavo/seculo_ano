<?php
function calcular($ano)
{
    $seculo = ceil($ano / 100);
    return $seculo;
}
$ano = $_POST["ano"];
echo "seculo: ".calcular($ano);
?>
<br>
<a href="index.php">Voltar</a>