<?php

if (isset($_POST['texto'])) {
   $texto = $_POST['texto'];

   $arquivo = fopen('msg.txt', 'w');
   fwrite($arquivo, $texto);
   fclose($arquivo);
}
?>