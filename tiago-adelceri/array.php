<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars); //CONTA QUANTOS ITENS TEM

for($x = 0; $x < $arrlength; $x++) { //PEGA O VALOR CONTADO E REPETE
  echo $cars[$x];
  echo "<br>";
}
?>