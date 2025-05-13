<h1 style="text-align: center;">Calculador de parcelas com juros</h1>
<form action="4.php" method="post">
    Valor do produto:  R$<input type="number" name="valor" /><br><br>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
$valorTotal = $_REQUEST['valor'] + $_REQUEST['valor'] * 0.16;
$valorParcela = $valorTotal / 10;
echo "<br>Valor da parcela: R$" . $valorParcela . "<br>Valor total: R$" . $valorTotal;
?>