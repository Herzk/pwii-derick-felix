<h1 style="text-align: center;">Calculador de parcelas com juros</h1>
<form action="4.php" method="post">
    Valor do produto:  R$<input type="number" name="valor" /><br>
    Juros:  <input type="number" name="juros" />%<br>
    Número de parcelas:  <input type="number" name="numParc" /><br><br>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
$valorTotal = $_REQUEST['valor'] + $_REQUEST['valor'] * ($_REQUEST['juros'] / 100);
$valorParcela = $valorTotal / $_REQUEST['numParc'];
echo "<br>Valor da parcela: R$" . $valorParcela . "<br>Valor total: R$" . $valorTotal;
?>