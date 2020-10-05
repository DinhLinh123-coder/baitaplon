<?php
class greeting {
    public static function welcome(){

        echo "Hello Word!";

        //gọi đến phương thức bình thường
        // không được sử dụng $this bên trong phương thức tĩnh
        // cách giải quyết
        // khởi tạo object từ chính class đó bằng new self();
        $s=new self();
        $s->demo3();
    }
    public function demo1() {
        // gọi đến phương thức tĩnh bên trong class
        self::welcome();
        // gọi đến phương thức bình thường
        $this->demo2();
    }

    public function demo2() {
        echo "<br>" . __METHOD__;
    }


    public function demo3() {
        echo "<br>" . __METHOD__;
    }

}



$g = new greeting();
$g->demo1();

