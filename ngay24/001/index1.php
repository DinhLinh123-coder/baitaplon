<?php
class Image{
    // khai báo thuộc tính
    // thuộc tính chỉ ra đặc điểm tính chất của đối tượng
    public $src="";
    public $alt="";
    public $title="";
    public $width="";
    public $height="";

    // phương thức chỉ ra hành động cụ thể của 1 đối tượng
    // phương thức giống hàm nhưng mà nó nằm trong class

    public function displayHTML($src, $alt="", $title="", $width="", $height=""){
        // lấy các tham số truyền vào gán cho các thuộc tính của class
        $this->src=$src;
        $this->alt=$alt;
        $this->title=$title;
        $this->width=$width;
        $this->height=$height;

        $image="<img src=\"$this->src\" alt=\"$this->alt\" title=\"$this->title\" width=\"$this->width\" height=\"$this->height\" />";
        return $image;
    }
}// kết thúc class php
//<img src="" alt="" title="" width="" height="" />


// tạo ra 1 đối tượng từ class
$image1 = new Image();
echo $image1->displayHTML("linh.jpg", "hình ảnh con chó", "ảnh", 200, 200);

// tạo ra object 2
$image2 = new Image();
echo $image2->displayHTML("linh1.jpg", "hình ảnh con chó", "ảnh", 200, 200);