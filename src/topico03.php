<?php
$cep= "01012123";
echo "cep = $cep";
$valor=5124.784;
echo"<br>valor = $valor";
echo "<br>R$ ".number_format($valor,2,",",".");
echo "<br>R$ ".number_format($valor,0,",",".");
$nome= "Bete";
echo "<br>nome = $nome";
echo '<br>nome = $nome';
$cor="blue";
echo "<p style='color:$cor'>$nome</p>";
$inteiro=(int)$valor;
echo "<br>valor = $inteiro";
$decimal= $valor-$inteiro;
echo "<br>valor = ".$decimal;
printf("<br>valor = %.3f",$decimal);
define("PI",3.1415);
echo "<br>PI = " .PI;
?>
