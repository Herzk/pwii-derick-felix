<h1>Calculador de volume de uma caixa retângular</h1>
<form action="2.php" method="post">
    Comprimento:  <input type="number" name="comprimento" /><br>
    Largura:  <input type="number" name="largura" /><br>
    Altura: <input type="number" name="altura" /><br><br>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
$volume = $_REQUEST['comprimento'] * $_REQUEST['largura'] * $_REQUEST['altura'];
echo "<br>Volume: " . $volume;
?>