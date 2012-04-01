<?php

namespace tests\math\Calculator;
use math\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @dataProvider calculatorProvider
   */

  public function testCalculator($fvalue,$svalue,$operator)
  {
    $calc = new Calculator();

    if($operator == "+") {
      $result = $calc->sum($fvalue,$svalue);
    } else if($operator == "-") {
      $result = $calc->subtract($fvalue,$svalue);
    } else if($operator == "*") {
      $result = $calc->multiply($fvalue,$svalue);
    } else if($operator == "/") {
      $result = $calc->divide($fvalue,$svalue);
    }

    $this->assertInternalType("integer",$result);
    $this->assertTrue($result > 0);
    $this->assertTrue(is_int($result));
  }

  public function calculatorProvider() 
  {
    return array(
      array(10,20,"+"),
      array(10,100,"+"),
      array(10,2,"*"),
      array(5,20,"/"),
      array(2,2,"+"),
      array(5,2,"-"),
      array(5,20,"*"),
      array(7,5,"*"),
      array(100,20,"/"),
      array(200,10,"/"),
    );
  }
}
