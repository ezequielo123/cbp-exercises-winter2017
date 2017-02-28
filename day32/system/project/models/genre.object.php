<?php 
class Genre_Object 
{
    public function getShortDescription()
    {
        return mb_substr($this->description, 0, 200). '...';
    }

}