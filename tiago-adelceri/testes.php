<!DOCTYPE HTML>  
<html>
<head>
<title>IMC</title>
<style>

.error {color: #FF0000;}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>  

<?php

$nomeErr = $turmaErr = $matematicaErr = $linguagensErr = $cienciasnaturezasErr = $cienciashumanasErr = ""; 
$nome = $turma = $matematica = $linguagens = $cienciasnaturezas = $cienciashumanas = ""; 
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é Obrigatório!";
  } else {
    $nome = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras! ";
    }
  }

  if (empty($_POST["turma"])) {
    $turmaErr = "Turma é Obrigatório!";
  } else {
    $turma = test_input($_POST["turma"]);

    if (!preg_match("/^[\d,.?!]+$/",$turma)) {
      $turmaErr = "Somente números!";
    }
  } 

  if (empty($_POST["matematica"])) {
    $matematicaErr = "Linguagens é Obrigatório!";
  } else {
    $matematica = test_input($_POST["matematica"]);

    if (!preg_match("/^[\d,.?!]+$/",$matematica)) {
      $matematicaErr = "Somente números!";
    }
  }

  if (empty($_POST["linguagens"])) {
    $linguagensErr = "Linguagens é Obrigatório!";
  } else {
    $linguagens = test_input($_POST["linguagens"]);

    if (!preg_match("/^[\d,.?!]+$/",$linguagens)) {
      $linguagensErr = "Somente números!";
    }
  }

  if (empty($_POST["cienciasnaturezas"])) {
    $cienciasnaturezasErr = "Ciências da Natureza é Obrigatório!";
  } else {
    $cienciasnaturezas = test_input($_POST["cienciasnaturezas"]);

    if (!preg_match("/^[\d,.?!]+$/",$cienciasnaturezas)) {
      $cienciasnaturezasErr = "Somente números!";
    }
  }

  if (empty($_POST["cienciashumanas"])) {
    $cienciashumanasErr = "Ciências Humanas é Obrigatório!";
  } else {
    $cienciashumanas = test_input($_POST["cienciashumanas"]);

    if (!preg_match("/^[\d,.?!]+$/",$cienciashumanas)) {
      $cienciashumanasErr = "Somente números!";
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<p><span class="error">Preenchimento Obrigatório!</span></p>

  Nome: <input type="text" name="nome" value="" placeholder="Ex: Tiago">
  <span class="error">* <?php echo $nomeErr;?></span>
  <br><br>

  Turma: <input type="text" name="turma" value="" placeholder="Ex: 52">
  <span class="error">* <?php echo $turmaErr;?></span>
  <br><br>

  Matematica: <input type="text" name="matematica" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $matematicaErr;?></span>
  <br><br>

  Linguagens: <input type="text" name="linguagens" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $linguagensErr;?></span>
  <br><br>

  Ciencias da naturezas: <input type="text" name="cienciasnaturezas" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $cienciasnaturezasErr;?></span>
  <br><br>

  Ciencias Humanas: <input type="text" name="cienciashumanas" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $cienciashumanasErr;?></span>
  <br><br>

  <input class ="botao" type="submit" name="submit" value="Calcular">  

</form>
<br>

<?php
 
if ($nome === ""){}

else {
  $conta1 = $matematica+$linguagens+$cienciashumanas+$cienciasnaturezas;
  $conta2 = $conta1/4;
  
    echo "Olá ".$nome."!";
    echo "<br>";
    echo "Seu resultado é ".$conta2 = number_format($conta2, 1, '.', '');;
    echo "<br>";

    if($conta2 <= 0 ){echo "Reprovou por faltas!";}
    elseif ($conta2 >= 1.0 && $conta2 <= 3.0){
      echo "Reprovou por notas!";}

     elseif ($conta2 >= 3.1 && $conta2 <= 5.0){
      echo "Em recuperacão!";}

     elseif ($conta2 > 5.1 && $conta2 <= 7.0){
     echo "Parabéns!!! Você está aprovado!";}

     else{
     echo "Parabéns!!! Você está com o estágio garantido!";
    }
}

?>

</body>
</html>