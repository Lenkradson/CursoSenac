<?php

$idade = "18";

$altura = "1,40m";

if ($idade >= "16" and $altura >= "1,50m") {
    echo "Sua idade e seu tamanho estão de acordo com o local";
  }
  
  elseif ($idade >= "16" and $altura <= "1,50m") {
    echo "Sua altura está de acordo, mas sua idade não está de acordo com o local";
  } 
  
  elseif ($idade <= "16" and $altura >= "1,50m") {
    echo "Sua altura está de acordo, mas sua idade não";
  } 

?>
