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

trait Computer {
    public $ip ="127.0.0.1";
    public function office(){
        echo "<br> soạn thảo văn bản";
    }

    public function email(){
        echo "<br> gửi và nhận email";
    }

    public function playGame(){
        echo "<br> chơi game";
    }
}
trait Radio{
    public function listenRadio(){
        echo "<br> nghe đài Radio";
    }
}

trait GpMachine{
    public function gps(){
        echo "<br> định vị vị trí";
    }
}

class smartPhone extends classicPhone {
    // sử dụng tất các thuộc tính và method từ máy tính, radio và máy GPS
    // nạp trait vào để class hiện tại nó kế thừa trait đấy
    // đa kế thừa

    use Computer, Radio, GpMachine;

}
$sonyz3= new SmartPhone();
$sonyz3->office();
$sonyz3->listenRadio();
$sonyz3->gps();

