<?php
function nomedafuncao() //AQUI EU SETO O NOME E O QUE A FUNCAO IRA FAZER, ELA SERIA TIPO UMA CLASS, DA PARA USAR VARIAS VEZES
{
  echo "A funcao foi chamada";
}

nomedafuncao(); //AQUI EU CHAMO A FUNCAO PARA FAZER O QUE FOI SETADO
echo "<hr>";
?>

<?php
echo "<hr>";
function nomesdasfamilias($fname) {
  echo "$fname Moura <br>";
}

nomesdasfamilias("Tiago");  //IRA CHAMAR O QUE ESTA DENTRO DAS PARENTESES E IRA SOBRESCREVER A VARIAVEL
nomesdasfamilias("Tais");
nomesdasfamilias("Taisa");
nomesdasfamilias("Marli");
nomesdasfamilias("Adelceri");
?>

<?php
echo "<hr>";
function nomesdasfamilias($fname, $year) {
  echo "$fname Moura. Nasceu em $year <br>";
}

nomesdasfamilias("Tiago", "2003");
nomesdasfamilias("Taisa", "2006");
nomesdasfamilias("Tais", "1999");
nomesdasfamilias("Marli", "1971");
nomesdasfamilias("Adelceri", "1947");
?>
