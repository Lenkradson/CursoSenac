<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = ""; // NAO ACEITA SE ESTIVER VAZIO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]); // ESSES NAME/EMAIL PRECISA ESTAR IGUAL O NOME DO INPUT NO HTML
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Validacão de formulário</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nome: <input type="text" name="name"> <!-- ESSES NOMES AQUI -->
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comentário: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Genêro:
  <input type="radio" name="gender" value="Feminino">Feminino
  <input type="radio" name="gender" value="Masculino">Masculino
  <input type="radio" name="gender" value="Outro">Outro
  <br><br>
  <input type="submit" name="submit" value="Envie">  
</form>

<?php
echo "<h2>Suas configs:</h2>";
echo "Nome: $name";
echo "<br>";
echo "Email: $email";
echo "<br>";
echo "Website: $website";
echo "<br>";
echo "Aba de comentários: $comment";
echo "<br>";
echo "Genero: $gender";
?>
