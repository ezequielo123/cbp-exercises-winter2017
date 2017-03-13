<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}

class dog extends animal
{
    use domesticated, understandCommands;
}

class wolf extends animal
{

}

trait domesticated
{
    public $owners_mood = 'unhappy';

    public function beFed()
    {
        $this->hungry = false;

        $this->owners_mood = 'happy';
    }
}

trait understandCommands
{
    public function fetch()
    {

    }

    public function sit()
    {
        
    }
}

class baby
{
    use domesticated;
}



$dog = new dog();
$dog->eat();

$robert = new wolf();
$robert->eat();

var_dump($dog);
var_dump($robert);

$dog->beFed();
var_dump($dog);

$baby = new baby();
$baby->beFed();

var_dump($baby);