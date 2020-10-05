<?php
class classicPhone {

    protected $phone_number=123;

    protected function callPhone(){
        echo "<br>".__METHOD__;
    }

    protected function receivePhone(){
        echo "<br>".__METHOD__;
    }

    public function abc(){
        $this->callPhone();
    }
}

class smartPhone extends classicPhone {
    /**
     * thuộc tính và phương thức mà protected
     * chỉ có thể truy cập được từ bên trong class cha
     * hoặc chỉ có thể truy cập được từ bên trong class con
     */

    public $ip="127.0.0.1";

    public function sendMail(){
        echo "<br>".__METHOD__;
    }

    public function playGame(){
        echo "<br>".__METHOD__;
}
public function getPhoneNumber(){
    return $this->phone_number;
}


public function newCallPhone() {
    // bên trong class con đang kế thừa
    $this->callPhone();
}

public function newReceivePhone() {
    $this->receivePhone();
}



}

// truy cập từ bên ngoài class
$sonyz3= new smartPhone();

echo "<pre>";
print_r($sonyz3);
echo "</pre>";
echo "<br> sđt: ".$sonyz3->getPhoneNumber();
$sonyz3->newCallPhone();
$sonyz3->newreceivePhone();
$sonyz3->sendMail();