<?php

class Human{
    public $name = '';
    private $gender= 'male';
    protected $education = 'MBBS';

    function __construct($name)
    {
//        echo __CLASS__ . 'is constructing..........';
        $this->name = $name;
    }
    function __call($name, $argument){
        echo $name. ' is not available';
    }
    public function walk(){
        $this->think();
        echo $this->name . ' walking.........<br>';
    }
    public function watch(){
        $this->think();
        echo $this->name . ' watching.........<br>';
    }
    private function think(){
        echo $this->name . ' thinking.........<br>';
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
    function __destruct()
    {
        echo __CLASS__ . 'the class is destroyed.......';
    }
}

$arup = new Human('Arup');
$arup->operates();
$arup->walk();


//echo 'another process is running';
//$arup->name = 'Arup';
//$arup->walk();
//$arup->setGender('male');
//echo $arup->getGender();

//echo '<br>';
//
//$ajoy = new Human();
//$ajoy->name = 'Ajoy';
//$ajoy->walk();
//$ajoy->watch();
