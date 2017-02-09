<?php

class vehicle 
{

    protected $nr_of_wheels = null;
    protected $color = null;
    public $avg_speed = null;

    public function travel($distance)
    {
        $avg_speed = max(1, $this->avg_speed); //the smallest value will be always 1
        return $distance / $this->avg_speed;
    }    
}
?>
