<?php

//this namespace would be just \

class food
{
  protected $name = 'unknown';

  public function __toString()
  {
    return $this->name;
  }
}