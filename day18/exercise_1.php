<?php

class car 
{
    public $color = null;

    public $manufacter = null;

    public $model = null;

    public $price = null;

    public $fuel_type = 'petrol';

    public $owner = 'manufacturer';

    public $nr_of_wheels = 4;

    public $current_speed = 0;

    public function speed_up()
    {
        $this->current_speed += 10;
    }
    public function break()
    {
        $this->current_speed -= 10;
    }
    public function get_stolen()
    {
        $this->owner = 'chop-shop';
    }
    public function be_bought($new_owner)
    {
        $this->owner = $new_owner;
    }

}        

// no car was made yet

$new_car = new car(); //a new car is created
$new_car->manufacturer = 'Skoda';
$new_car->model = 'Favorit';

$new_car->price = 40000;//car's price

$new_car->price = 10000;//the car is on sale

$new_car->be_bought('Ezequiel'); //I bought the car 

$new_car->speed_up();//new car speed = 10
$new_car->speed_up();//new car speed = 20
$new_car->speed_up();//new car speed = 30
$new_car->speed_up();//new car speed = 40

$new_car->break();//new car speed = 30
$new_car->break();//new car speed = 20
$new_car->break();//new car speed = 10
$new_car->break();//new car speed = 0 - I stopped


$new_car->get_stolen();

$new_car->nr_of_wheels = 0;//the wheels are chopped of


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
        

</body>
</html>