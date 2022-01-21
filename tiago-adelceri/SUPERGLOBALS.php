$GLOBALS // ELE PODE USAR UMA VARIAVEL DE FORA DE UMA FUNCAO E COLOCAR DENTRO DELA


$SERVER // PARA PEGAR INFORMACOES DO SERVIDOR


$REQUEST // PARA PEDIR UM INPUT PRO USUARIO E MUDAR A VARIAVEL PRO NOME DELE POR EXEMPLO.


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>


$POST // É MAIS UTILIZADO QUE O REQUEST


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>


$GET // ELE ESCONDE O ENDERECO PARA POR UMA VARIAVEL


<?php
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
?>