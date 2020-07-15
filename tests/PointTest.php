<?php 

use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
   public function testPoint() {
      $point = new Point(1,2);
      $this->assertClassHasAttribute('x', 'Point');
      $this->assertClassHasAttribute('y', 'Point');
   }
   /**
    * @dataProvider pointProvider
    */
   public function testGetX($x, $y) {
      $point = new Point($x,$y);
      $this->assertEquals($x, $point->getX());
   }
     /**
    * @dataProvider pointProvider
    */
   public function testGetY($x, $y) {
      $point = new Point($x,$y);
      $this->assertEquals($y, $point->gety());
   }

   public function pointProvider() {
      return [
         [1, 0],
         [2, 4],
         [4, 4]
      ];
   }

   public function testDistance() {
      $p1 = new Point(1,2);
      $p2 = new Point(4,5);
      $distance = $p1->distance($p2);
      $this->assertNotEquals(0, $distance);
      $this->assertLessThan(20, $distance);
   }
   public function testDeplacement() {
      $p1 = new Point(1,2);
      $p1->deplace(5,7);
      $this->assertEquals(6, $p1->getX());
      $this->assertEquals(9, $p1->getY());
   }
}


?>