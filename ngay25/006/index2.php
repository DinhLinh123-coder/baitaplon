<?php
class greeting{
    public static function welcome(){
        echo "Hello World!";
    }
    public function demo1(){
        // gọi đến phương thức tĩnh bên trong class
        self::welcome();
        // gọi đến phương thức bình thường
        $this->demo2();
    }

    public function demo2(){
        echo "<br>".__METHOD__;
        
    }
}

$g= new greeting();
$g->demo1();
