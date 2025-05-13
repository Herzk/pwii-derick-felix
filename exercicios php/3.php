<h1 style="text-align: center;">Calculador de área de trapézio</h1>
<form action="3.php" method="post">
    Base menor:  <input type="number" name="b" /><br>
    Base maior:  <input type="number" name="B" /><br>
    Altura: <input type="number" name="h" /><br><br>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
$area = ($_REQUEST['b'] + $_REQUEST['B']) * $_REQUEST['h'] / 2;
echo "<br>Área: " . $area;
?>