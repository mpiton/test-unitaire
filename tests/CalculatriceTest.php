<?php
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
   public function testAddition() {
      $calculatrice = new Calculatrice();
      $this->assertSame(10, $calculatrice->addition(6,4));
      $this->assertSame(12, $calculatrice->addition(8,4));
      
   }
   public function testMultiplication() {
      $calculatrice = new Calculatrice();
      $this->assertSame(24, $calculatrice->multiplication(6,4));
      $this->assertSame(32, $calculatrice->multiplication(8,4));
   }
   public function testSoustraction() {
      $calculatrice = new Calculatrice();
      $this->assertSame(2, $calculatrice->soustraction(6,4));
      $this->assertSame(4, $calculatrice->soustraction(8,4));
   }
   public function testDivision() {
      $calculatrice = new Calculatrice();
      $this->assertSame(2, $calculatrice->division(8,4));
      $this->assertSame(3, $calculatrice->division(9,3));
   }
   public function testMethodExist() {
      $calculatrice = new Calculatrice();
      $this->assertTrue(method_exists($calculatrice,'addition'));
      $this->assertTrue(method_exists($calculatrice,'soustraction'));
      $this->assertTrue(method_exists($calculatrice,'multiplication'));
      $this->assertTrue(method_exists($calculatrice,'division'));
   }
   /**
    * @dataProvider multiplicationProvider
    */
   public function testMultiplicationAvecDonnees($a, $b, $attendu) {
      $this->assertSame($attendu, Calculatrice::multiplication($a,$b));
   }

   public function multiplicationProvider() {
      return [
         [1, 0, 0],
         [2, 4, 8],
         [4, 4, 16]
      ];
   }

   public function testAdditionArgument() {
      $this->expectException("ArgumentCountError");
      $calculatrice = new Calculatrice();
      $calculatrice->addition(1);
   }
}
