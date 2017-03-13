<?php

/*--- write your code ONLY between here ---*/

namespace giraffe_module;

/*--- and here ---*/
use \animal as animal;

// class = giraffe_module\giraffe
class giraffe extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}