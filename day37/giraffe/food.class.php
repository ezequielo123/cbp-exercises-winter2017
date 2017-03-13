<?php

/*--- write your code ONLY between here ---*/

namespace giraffe_module;

/*--- and here ---*/

use \food as basic_food;

// class = giraffe_module\food
class food extends basic_food
{
  protected $name = 'leaves';

  public function __toString()
  {
    return $this->name;
  }
}