<?php
require("header.php");

$resultat = $_GET["phrase"];

function form() {
   echo "<form action='' method='get'>";
echo "<label for='phrase'>Phrase</label>";
   echo "<input type='text' name='phrase' id='phrase'>";
   echo "<input type='submit' value='Envoyer'>";
echo "</form>";
}

function mb_strrev($str){
   $r = '';
   for ($i = mb_strlen($str); $i>=0; $i--) {
       $r .= mb_substr($str, $i, 1);
   }
   return $r;
}

function rev_motphrase($resultat) {
   return implode(' ', array_reverse(explode(' ', $resultat)));
}


function rev_mot($resultat) {
   return implode(' ',array_map('mb_strrev',explode(' ',$resultat)));
}


//Affiche le formulaire
form();

// Affiche le resultat
echo $resultat;
echo "<br>";
echo mb_strrev($resultat);
echo "<br>";
echo rev_motphrase($resultat);
echo '<br>';
echo rev_mot($resultat);