<?php
class Image{
    // khai báo thuộc tính
    // thuộc tính chỉ ra đặc điểm tính chất của đối tượng
    public $src="";
    public $alt="";
    public $title="";
    public $width="";
    public $height="";

    // hàm khởi tạo
    // được gọi 1 cách tự động khi khởi tạo đối tượng bằng từ new

   public function __construct($src, $alt="", $title="", $width="", $height=""){
   echo "<br>". __METHOD__;

   $this->src=$src;
   $this->alt=$alt;
   $this->title=$title;
   $this->width=$width;
   $this->height=$height;
   }

   public function displayHTML() {
       $image="<img src=\"$this->src\" alt=\"$this->alt\" title=\"$this->title\" width=\"$this->width\" height=\"$this->height\"/>";
       return $image;
       
   }

}

$image1= new Image("linh.jpg");
echo $image1->displayHTML();