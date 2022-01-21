<?php //WHILE
$x = 1;

while($x <= 5) 
{ //enquanto for menor que 5 ele ira repetir o que estiver abaixo
  echo "O número é: $x <br>";
  $x++;
}
?>

<?php //WHILE LOOP
$x = 0;
echo "<hr>";
while($x <= 100) {//enquanto for menor que 5 ele ira repetir o que estiver abaixo, Ele pula de 10 em 10
  echo "O número é: $x <br>";
  $x+=10;
}
?>


<?php //DO WHILE LOOP
$x = 1;
echo "<hr>";
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 10); //Quantas vezes irá ser repetido
?>

<?php //FOR LOOP
echo "<hr>";
for ($x = 0; $x <= 10; $x++) { //COMECA DO 0 E VAI ATE O 10
  echo "The number is: $x <br>";
}
?>

<?php  //LOOP FOR EACH
echo "<hr>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) { //AS COLORS TENDO VALORES IRÃO SER EXIBIDAS
  echo "$value <br>";
}
?> 

<?php //LOOP FOR EACH 2
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

<?php //FOR
echo "<hr>";
for ($x = 0; $x < 10; $x++) { //ELE PARTE DO 0 E PARA NO 4 POR ESTAR SETADO
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>

<?php //CONTINUE
echo "<hr>";
$x = 0;

while($x < 10) {//ELE PARTE DO 0 ATÉ O 10 E NÃO ADICIONA O 4
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>