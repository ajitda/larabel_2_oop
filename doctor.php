<?php
require_once('index.php');
class Skin_Doctor extends Doctor{
    function __construct($name)
    {
        echo "constructing.......";
        echo $this->education;
    }
}
$skin_doctor = new Skin_Doctor('Tushar');
//$skin_doctor->setEducation('MBBS');
//
//echo $skin_doctor->education;
