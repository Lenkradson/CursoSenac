<!DOCTYPE HTML>  
<html>
<head>
<title>IMC</title>
<style>

body {
  background-color: black;
}

.card-body {
  background-color: orange;
  height: 91.3vh;
  border: none;

}
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
  padding-right: 10px;
}

.formulario {
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    padding-top: 100px;
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

$nomeErr = $turmaErr = $notaumErr = $notadoisErr = $notatresErr = $materiasErr = $notaquatroErr = ""; 
$nome = $turma = $notaum = $notadois = $notatres = $materias = $notaquatro = ""; 

 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é Obrigatório!";
  } else {
    $nome = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras! ";
    }
  }

  if (empty($_POST["materias"])) {
    $materiasErr = "materias é Obrigatório!";
  } else {
    $materias = test_input($_POST["materias"]);

    if (!preg_match("/^[\d,.?!]+$/",$materias)) {
      $materiasErr = "Somente números!";
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


  if (empty($_POST["notaum"])) {
    $notaumErr = "Nota 1 é Obrigatório!";
  } else {
    $notaum = test_input($_POST["notaum"]);

    if (!preg_match("/^[\d,.?!]+$/",$notaum)) {
      $notaumErr = "Somente números!";
    }
  }

  if (empty($_POST["notadois"])) {
    $notadoisErr = "Nota 2 é Obrigatório!";
  } else {
    $notadois = test_input($_POST["notadois"]);

    if (!preg_match("/^[\d,.?!]+$/",$notadois)) {
      $notadoisErr = "Somente números!";
    }
  }

  if (empty($_POST["notatres"])) {
    $notatresErr = "Nota 3 é Obrigatório!";
  } else {
    $notatres = test_input($_POST["notatres"]);

    if (!preg_match("/^[\d,.?!]+$/",$notatres)) {
      $notatresErr = "Somente números!";
    }
  }

  if (empty($_POST["notaquatro"])) {
    $notaquatroErr = "Nota 4 é Obrigatório!";
  } else {
    $notaquatro = test_input($_POST["notaquatro"]);

    if (!preg_match("/^[\d,.?!]+$/",$notaquatro)) {
      $notaquatroErr = "Somente números!";
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
<div class="card text-center">
  <div class="card-header">
  Curso Senac/RS
  </div>
  <div class="card-body">
    <h5 class="card-title">Boletim</h5>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<section class="formulario"><p><span class="error">Preenchimento Obrigatório!</span></p></section>


<section id="at">
  Aluno: <input type="text" name="nome" value="" placeholder="Ex: Tiago">
  <span class="error">* <?php echo $nomeErr;?></span>

  Turma: <input type="text" name="turma" value="" placeholder="Ex: 52">
  <span class="error">* <?php echo $turmaErr;?></span>
</section>
<br>
<section id="sla2">
  Disciplinas: <select name="materias"> 
    <option value="Matematica" selected>Matematica</option>
    <option value="Linguagens">Linguagens</option>
    <option value="Ciencias da Natureza">Ciencias da Natureza</option>
    <option value="Ciencias Humanas/Sociais">Ciencias Humanas/Sociais</option>
  </select>
</section>
<br>

<section class="formulario">
  Nota 1: <input type="text" name="notaum" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $notaumErr;?></span>
  Nota 2: <input type="text" name="notadois" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $notadoisErr;?></span>
  </section>


  <section class="formulario">
  Nota 3: <input type="text" name="notatres" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $notatresErr;?></span>
  Nota 4: <input type="text" name="notaquatro" value="" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Informe em notas/ Ex: 2,2">
  <span class="error">* <?php echo $notaquatroErr;?></span>
  </section>

  <br>

  <section class="formulario">
  <input class ="botao" type="submit" name="submit" value="Calcular">  
  </section>
<br>
</form>
<?php
 
if ($nome === ""){}

else {
  $conta1 = $notaum+$notadois+$notaquatro+$notatres;
  $conta2 = $conta1/4;
  $conta2 = number_format($conta2, 1, '.', '');
  
    echo '<div class="respostas"> Olá '.$nome.', Turma '.$turma.'!</div>';
    echo '<div class="respostas">Seu resultado em '.$materias.' é '.$conta2.'</div>'; //preciso adicionar o number_format($conta2, 1, '.', '');;

    if($conta2 <= 0 ){echo '<div class="respostas">Reprovou por faltas!</div>';}
    elseif ($conta2 >= 1.0 && $conta2 <= 3.0){
      echo '<div class="respostas">Reprovou por notas!</div>';}

     elseif ($conta2 >= 3.1 && $conta2 <= 5.0){
      echo '<div class="respostas">Em recuperacão!</div>';}

     elseif ($conta2 > 5.1 && $conta2 <= 7.0){
     echo '<div class="respostas">Parabéns!!! Você está aprovado!</div>';}

     else{
     echo '<div class="respostas">Parabéns!!! Você está com o estágio garantido!</div>';
    }
}

?>
  </div>
  <div class="card-footer">
  Curso Senac/RS
  </div>
</div>
</body>
</html>