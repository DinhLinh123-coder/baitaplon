<?php

class Student {
    public $ten="";
    public $tuoi="";
    public $quequan="";
    public $dhk=[];

    function dtb($dhk, $ten, $tuoi, $quequan){

        $this->ten=$ten;
        $this->tuoi=$tuoi;
        $this->quequan=$quequan;
        $this->dhk=$dhk;
        $t=0;
        for($i=0; $i<count($this->dhk);$i++){
            $t+=$this->dhk[$i];
        }
        $dtb = $t/count($this->dhk);
       if($dtb>8){
           return $this->ten. "<br> ".$this->quequan. "<br> ".$this->tuoi ."<br>  DTB: ". $dtb ."<br> xếp loại: ". "Giỏi";
       }
       elseif ($dtb>6 && $dtb<8){
           return $this->ten. "<br> ".$this->quequan. "<br> ".$this->tuoi ."<br>  DTB: ". $dtb ."<br> xếp loại: ". "khá";
       }
       elseif ($dtb>4.5 && $dtb<6) {
           return $this->ten . "<br> " . $this->quequan . "<br> " . $this->tuoi . "<br>  DTB: " . $dtb . "<br> xếp loại: " . "TB";
       }
       else{
           return $this->ten . "<br> " . $this->quequan . "<br> " . $this->tuoi . "<br>  DTB: " . $dtb . "<br> xếp loại: " . "Yếu";
       }
    }


}

$x= new Student();
echo $x->dtb([10,10,10,10,10,10,10,10], 'Linh', '20', 'YB');
echo  "<hr> <br>";
echo $x->dtb([0,1,2,3,4,5,7,8], 'Huong', '21', 'TB');

// tạo ra 1 class sinh viên
// với các thuộc tính  : tên , tuổi , quê quán , điểm học kỳ
// thuộc tính điểm học kỳ là 1 mảng chứa 8 giá trị
// tương ứng với 8 kỳ học
// hãy viết 1 phương thức để tính điểm trung bình
// sau đó in ra xếp loại cho sinh viên đó

// cuối cùng tạo 2 đối tượng có tên là nam và hương
// khởi tạo từ class sinh viên này
// truyền các thông tin cho các thuộc tính của class
// và gọi phương thức tính điểm TB và in ra xếp loại
