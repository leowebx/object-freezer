<?php

namespace math;

class Calculator
{
  public function sum($fvalue,$svalue)
  {
    return $fvalue + $svalue;
  }

  public function subtract($fvalue,$svalue)
  {
    if($fvalue > $svalue) {
      $ret = $fvalue - $svalue;
    } else {
      $ret = $svalue - $fvalue;
    }
    
    return $ret;
  }

  public function multiply($fvalue,$svalue)
  {
    return $fvalue * $svalue;
  }

  public function divide($fvalue,$svalue)
  {
    if($fvalue > $svalue) {
      $ret = $fvalue / $svalue;
    } else {
      $ret = $svalue / $fvalue;
    }
    
    return $ret;
  }
}
