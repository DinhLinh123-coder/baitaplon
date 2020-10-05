<?php
class classicPhone {

    public $phone_number=123;

    public function callPhone(){
        echo "<br>".__METHOD__;
    }

    public function receivePhone(){
        echo "<br>".__METHOD__;
    }
}

class smartPhone extends classicPhone {
    public $ip="127.0.0.1";

    public function sendMail(){
        echo "<br>".__METHOD__;
    }

}
$sonyz3= new smartPhone();

echo "<pre>";
print_r($sonyz3);
echo "</pre>";
$sonyz3->callPhone();
$sonyz3->receivePhone();
$sonyz3->sendMail();