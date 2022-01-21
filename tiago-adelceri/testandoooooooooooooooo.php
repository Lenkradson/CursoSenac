<!DOCTYPE HTML>  
<html>
<head>
<title>Imposto De Renda</title>
<style>

body {
  background-color: black;
}

.form-select{
    width: 260px!important;
}

.btn-primary {
  background-color: #373a06!important;
  border: none!important;
}

.card-body {
  background-color: orange;
  height: 91.3vh;
  width: 99.9vw;
  border: none;
  padding: 17rem 1rem!important;
  text-align: center;

}

.card-header, .card-footer {
  background-color: black!important;
  color: white;
}



#sla2{
  display: flex;
  align-items: center;
  justify-content: center;
}

#at{
  display: flex;
  align-items: center;
  justify-content: center;
}

.formulario {
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
}


.respostas {
    color: darkred;
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

}

.error {
    color: #FF0000;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>  

<?php

$nomeErr = $faixasErr = ""; 
$nome = $faixas = ""; 

 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é Obrigatório!";
  } else {
    $nome = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras! ";
    }
  }

  if (empty($_POST["faixas"])) {
    $faixasErr = " é Obrigatório!";
  } else {
    $faixas = test_input($_POST["faixas"]);
  } 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="card text-center">
  <div class="card-header">
  Curso Senac/RS
  </div>
  <div class="card-body">
    <h5 class="card-title">Imposto de Renda<br><br></h5>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<section class="formulario"><p><span class="error">Preenchimento Obrigatório!</span></p></section>

Nome <br>
<section id="at">
<input type="text" name="nome" placeholder="Ex: Tiago">
</section>
<br>
Faixas saláriais
<section id="sla2">
  <select name= "faixas" class="form-select" aria-label="Default select example">
    <option value="12">Selecione uma faixa</option>
    <option value="1">Até R$ 2.500,00</option>
    <option value="2">De R$ 2.500,01 a R$ 3.200,00</option>
    <option value="3">De R$ 3.200,01 a R$ 4.250,00</option>
    <option value="4">De R$ 4.250,01 a R$ 5.300,00</option>
    <option value="5">Acima de R$ 5.300,01</option>
  </select>
</section>
<br>

  <section class="formulario">
  <button type="submit" class="btn btn-primary mb-3">Confirmar</button> 
  </section>
<br>
</form>
<?php
 
if ($nome === ""){
    echo '<p class="error">Preencha seu nome</p>';
}

else {
  
    if($faixas == "12" ){
        echo '<div class="error"> Você precisa preencher a faixa salárial!</div>';}

    elseif ($faixas == "1" ){
        echo '<div class="respostas"> Olá '.$nome.', se seu sálario está entre R$ 2.500,00!</div>';
        echo '<div class="respostas"> Seu emposto de renda será nulo!</div>';}

     elseif ($faixas == "2" ){
        echo '<div class="respostas"> Olá '.$nome.', se seu sálario está entre R$ 2.500,01 a R$ 3.200,00!</div>';
        echo '<div class="respostas"> Seu emposto de renda será de 7,5%!</div>';}

     elseif ($faixas == "3" ){
        echo '<div class="respostas"> Olá '.$nome.', se seu sálario está entre R$ 3.200,01 a R$ 4.250,00!</div>';
        echo '<div class="respostas"> Seu emposto de renda será de 15%!</div>';}

     elseif ($faixas == "4" ){
        echo '<div class="respostas"> Olá '.$nome.', se seu sálario está entre R$ 4.250,01 a R$ 5.300,00!</div>';
        echo '<div class="respostas"> Seu emposto de renda será 22,5%</div>';}

     else{
        echo '<div class="respostas"> Olá '.$nome.', se seu sálario está acima de R$ 5.300,01!</div>';
        echo '<div class="respostas"> Seu emposto de renda será 27,5%</div>';}
}

?>
  </div>
  <div class="card-footer">
  Curso Senac/RS
  </div>
</div>
</body>
</html>