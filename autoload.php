<?php 

function chargement($classe) {
   $fichier = 'src/' . $classe . '.php';
   if (file_exists($fichier)) {
      require $fichier;
  }
}

spl_autoload_register('chargement');


?>