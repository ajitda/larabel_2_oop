<?php

class Human{
    public $name = '';
    private $gender= '';

    function __construct($name)
    {
        echo __CLASS__ . 'is constructing..........';
        $this->name = $name;
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
$arup->walk();
sleep(10);

echo 'another process is running';
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