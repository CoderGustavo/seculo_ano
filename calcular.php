<?php
function SeculoAno($ano)
{
    $seculo = ceil($ano / 100);
    return $seculo;
}
$ano = $_POST["ano"];
echo "seculo: ".SeculoAno($ano);
?>
<br>
<a href="index.php">Voltar</a>