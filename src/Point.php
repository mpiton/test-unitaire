<?php 

class Point
{
   private $x;
   private $y;
   public function __construct($x, $y)
   {
   $this->x = $x;
   $this->y = $y;
   }
   public function getX() {
      return $this->x;
   }
   public function getY() {
      return $this->y;
   }
   public function distance(Point $point) {
      return sqrt(($point->x - $this->x)**2) +(($point->y - $this->y)**2);
   }
   public function deplace($a, $b) {
   $this->x += $a;
   $this->y += $b;
   }
}


?>