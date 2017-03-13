<?php

class animal
{
  protected $stomach = array();

  public function getStomachContents()
  {
    return join(', ', $this->stomach);
  }
}