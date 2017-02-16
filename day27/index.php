<?php 

$name = 'James';
$name .= ' Bond';

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24,
    
);

echo 'The name is ' . $bond_info['last_name'] . '. ' . $bond_info['first_name'] . ' ' . $bond_info['last_name'] . '.<br>';
echo 'One day when I was driving my ' . $bond_info['car'] . ' in the Alps ' . $bond_info['enemy'] . ' came along and made me a ' . $bond_info['relationship_status'] . '.' . ' If only I had my ' . $bond_info['gun'] . ' with me!';

$bond_info['last_case'] = 'Spectre';
array_push($bond_info, 'lastest case', 'Shikaka');

class bondCase 
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;

    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    protected $girls = array();

    public function addGirl($name)
    {
        $this->girls[] = $name;
        static::$girls_met++;
    }

    public function __construct($year)
    {
        $this->year = $year;
        static::$cases_solved++;
    }

    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $year->year;
    }
    public function setEnemy($enemy)
    {
        $this->enemy = $enemy;
    }

    public function getEnemy()
    {
        return $enemy->enemy;
    }
}

$casino = new bondCase(2015);
$casino->setName = 'Spectre';
$casino->setEnemy = 'Ernst Stavro Blofeld';

$casino->addGirl('Estrella');
$casino->addGirl('Lucia Sciarra');
$casino->addGirl('Madeleine Swann');

$spectre = new bondCase(2006);
$spectre->setName = 'Casino Royale';
$spectre->setEnemy = 'Le Chiffre';
$spectre->addGirl('Vesper Lynd');
$spectre->addGirl('Solange Dimitrios');

echo '<br>On average Bond has met ' . bondCase::getAvgGirlsPerCase() . ' girls per case.';