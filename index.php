<?php
require_once('classes.php');
class Doctor extends Human{
    public $discipline = '';
    public function operates(){
        echo 'is operating...<br>';
    }

    public function __isset($name)
    {

    }

    public function setEducation($education){
        $this->education = $education;
    }
    public function getEducation(){
        return $this->education;
    }
    public function __invoke()
    {
        var_dump($this);
    }
}



$human = new Doctor('Bappa');
echo $human();
//isset($human->age);
//echo 'Bappa is ' .$human->age .'years old';
//$doctor = new Doctor('Tushar');
//$doctor->discipline = 'skin';
//$doctor->setGender('female');
//$doctor->setEducation('M.B.B.S');
//echo 'Doctor Name : ' .$doctor->name . '<br>';
//echo 'Doctor Gender : ' .$doctor->getGender() . '<br>';
//echo 'Doctor Education : ' .$doctor->getEducation() . '<br>';
//echo 'Doctor Discipline : ' .$doctor->discipline . '<br>';
