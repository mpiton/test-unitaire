<?php

class Calculatrice
{
   public function addition($n1,$n2) {
      $resultat = $n1 + $n2;
      return $resultat;
   }
   public static function multiplication($n1,$n2) {
      $resultat = $n1 * $n2;
      return $resultat;
   }
   public function soustraction($n1,$n2) {
      $resultat = $n1 - $n2;
      return $resultat;
   }
   public function division($n1,$n2) {
      $resultat = $n1 / $n2;
      return $resultat;
   }
}
