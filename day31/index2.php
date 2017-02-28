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
        
    }
}

class delivery extends address
{
    public $address = null;
    public $is_sent  = null;
    public $sent_at  = null;
    public $is_delivered  = null;
    public $delivered_at   = null;

    public function __construct($a)
    {
        $this->address = $a;
    }
    
    public function getPrice()
    {
        if (isLocal($address))
        {
            return '0';
        } else {
            return '8.99';
        }
    }
    
    public function send()
    {
        $is_sent = true;
        $sent_at = date("m.d.y");
    }
    
    public function delivered($datetime)
    {
        $is_delivered = true;
        $delivered_at = $datetime;
    }
}

$address_array = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);

$my_address = new address($address_array);
$my_delivery = new delivery($address);
$my_delivery->send();
$my_delivery->delivered('2017-02-20 09:00:00');