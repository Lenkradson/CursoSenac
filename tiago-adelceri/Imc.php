<!DOCTYPE HTML>  
<html>
<head>
<title>IMC</title>
<style>

body {
  padding: 30vh 44vw 30vh 44vw;
  background-color: black;
  color: white;
}

.align-items-center {
  text-align: center;
  justify-content: center;
}


.error {color: #FF0000;}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>  

<?php

$nomeErr = $pesoErr = $alturaErr = "";
$nome = $peso = $altura = ""; 
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é Obrigatório!";
  } else {
    $nome = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras! ";
    }
  }

  if (empty($_POST["peso"])) {
    $pesoErr = "Peso é Obrigatório!";
  } else {
    $peso = test_input($_POST["peso"]);

    if (!preg_match("/^[\d,.?!]+$/",$peso)) {
      $pesoErr = "Somente números!";
    }
  } 
  if (empty($_POST["altura"])) {
    $alturaErr = "Altura é Obrigatório!";
  } else {
    $altura = test_input($_POST["altura"]);

    if (!preg_match("/^[\d,.?!]+$/",$altura)) {
      $alturaErr = "Somente números!";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="align-items-center">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<p><span class="error">Preenchimento Obrigatório!</span></p>

  Nome: <input type="text" name="nome" value="" placeholder="Ex: Tiago">
  <span class="error">* <?php echo $nomeErr;?></span>
  <br><br>

  Peso: <input type="text" name="peso" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em KG/ Ex: 52,2">
  <span class="error">* <?php echo $pesoErr;?></span>
  <br><br>

  Altura <input type="text" name="altura" value="" placeholder="Informe em CM/ Ex: 170">
  <span class="error">*<?php echo $alturaErr?></span>
  <br><br>

  <input class ="botao" type="submit" name="submit" value="Calcular">  

</form>
</div>

<br>
<?php

if ($nome.$altura.$peso === ""){}
if (!preg_match("/^[\d,.?!]+$/",$altura)) {}

else {
  $conta1 = $altura*$altura/10000;
  $conta2 = $peso/$conta1;
    echo "Olá ".$nome."!";
    echo "<br>";
    echo "Seu IMC é ".$conta2 = number_format($conta2, 1, '.', '');;
    echo "<br>";

    if($conta2 < 16.0){echo "Magreza Grau III.";}
    elseif ($conta2 >= 16.1 && $conta2 <= 16.9){
      echo "Magreza Grau II.";}

     elseif ($conta2 >= 17.0 && $conta2 <= 18.4){
      echo "Magreza Grau I.";}

     elseif ($conta2 >= 18.5 && $conta2 <= 24.9){
     echo "Parabéns!!! Você esta no seu peso ideal.";}

     elseif ($conta2 >= 25.0 && $conta2 <= 29.9){
     echo "Você está acima de seu peso (sobrepeso).";}

     elseif ($conta2 >= 30.0 && $conta2 <= 34.9){
     echo "Você está com Obesidade grau I.";}

     elseif ($conta2 >= 35.0 && $conta2 <= 39.9){
      echo "Você está com Obesidade grau II.";}

     else{
     echo "Você está com Obesidade grau III.";
    }
}

?>
</body>
</html>