<?php

abstract class Smartphone {
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    abstract public function callPhone();

    abstract public function receivePhone();

    abstract public function operatingSystem();

    // tạo 1 phương thức thông thường
    public function testDemo1(){
        echo "<br>".__METHOD__;
    }
}

class Iphone extends Smartphone{


}

$ipXsMax= new Iphone('iphone xs max');
$ipXsMax->testDemo1();
