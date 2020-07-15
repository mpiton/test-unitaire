<?php

function afficheEnListe($tableau) {
   echo "<ul class='navbar-nav mr-auto>";
   foreach ($tableau as $case => $value) {
      echo "<li class'nav-item'><a class='nav-link' href=" . $value . ">" . $case . "</a></li>";
   }
   echo "</ul>";
}

function form() {
   echo "<form action='valide.php' method='post'>Login</label>";
echo "<label for='login'>";
   echo "<input type='text' name='prenom' id='prenom'>";
echo "<label for='password'>Password</label>";
  echo "<input type='password' name='password' id='password'>";
   echo "<input type='submit' value='Envoyer'>";
echo "</form>";
}
