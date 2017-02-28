<?php

class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    static protected $local_country = null;

    public static function setLocalCountry($country)
    {
        echo static::$local_country = $country;
    }

    public $input_data = array(
        'name' => null,
        'street' => null,
        'house_nr' => null,
        'city' => null,
        'country' => null,
        'postal_code' => null
    );

    public function __construct($input_data) {
        if (isset($input_data['name']))
        {
            $this->sname = $input_data['name'];
        }    
        if (isset($input_data['street']))
        {
            $this->sstreet = $input_data['street'];
        }    
        if (isset($input_data['house_nr']))
        {
            $this->shouse_nr = $input_data['house_nr'];
        }
        if (isset($input_data['city']))
        {
            $this->scity = $input_data['city'];
        }
        if (isset($input_data['country']))
        {
            $this->scountry = $input_data['country'];
        }
        if (isset($input_data['postal_code']))
        {
            $this->spostal_code = $input_data['postal_code'];
        }
    }
}

$data2 = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'postal_code' => '90255'
);
$a = new address($data2);
echo $a->sname;
echo $a->sstreet;
echo $a->shouse_nr;
echo $a->spostal_code;
    
