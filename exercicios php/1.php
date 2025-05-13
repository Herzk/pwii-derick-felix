<h1 style="text-align: center;">Calculador de consumo médio de combustível</h1>
<form action="1.php" method="post">
    Distância total percorrida:  <input type="number" name="distTotal" />Km<br>
    Quantidade de combustível consumida: <input type="number" name="quantComb" />L<br><br>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
$consMedio = $_REQUEST['distTotal'] / $_REQUEST['quantComb'];
echo "<br>Consumo Médio: " . $consMedio . "Km/L";
?>