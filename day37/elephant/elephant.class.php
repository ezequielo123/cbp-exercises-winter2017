<?php

/*--- write your code ONLY between here ---*/

namespace elephant_module;

use \animal as animal;
/*--- and here ---*/

// class = elephant_module\elephant
class elephant extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}