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
    public function callPhone(){
        echo "<br>".__METHOD__;
}

    public function receivePhone()
{
    echo "<br>".__METHOD__;
}
    public function operatingSystem()
    {
        echo "<br>"."apple IOS";
    }

}

class Samsung extends Smartphone{
    public function callPhone() {
        echo "<br>" . __METHOD__;
    }

    public function receivePhone() {
        echo "<br>" . __METHOD__;
    }

    public function operatingSystem() {
        echo "<br>" . "Android";
    }
}

$ipXsMax = new Iphone('iphone xs max');
$ipXsMax->testDemo1();
$ipXsMax->operatingSystem();

$samsungS8 = new Samsung("samsung s8");
$samsungS8->operatingSystem();
