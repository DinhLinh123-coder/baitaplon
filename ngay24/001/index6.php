<?php

class Image {

    // khai báo thuộc tính
    // thuộc tính chỉ ra đặc điểm tính chất của đối tượng
    public $src = "";
    public $alt = "";
    public $title = "";
    public $width = "";
    public $height = "";


    // hàm khởi tạo
    // được gọi 1 cách tự động khi khởi tạo đối tượng bằng từ new
    public function __construct($src, $alt = "", $title = "", $width = "", $height = "")
    {
        echo "<br>" . __METHOD__;
        // lấy các tham số truyền vào gán cho các thuộc tính của class
        $this->src = $src;
        $this->alt = $alt;
        $this->title = $title;
        $this->width = $width;
        $this->height = $height;
    }

    // phương thức chỉ ra hành động cụ thể của 1 đối tượng
    // phương thức giống hàm nhưng mà nó nằm trong class
    public function displayHTML() {

        $image = "<img src=\"$this->src\" alt=\"$this->alt\" title=\"$this->title\" width=\"$this->width\" height=\"$this->height\" />";

        return $image;
    }


    /**
     * hàm hủy chạy tự động trong 2 trường hợp
     * - TH1 : khi mà script php kết thúc
     * - TH2 : khi ta cố tình hủy object từ class này đi
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br>" . __METHOD__;

        $this->src = "";
        $this->alt = "";
        $this->title = "";
        $this->width = "";
        $this->height = "";
    }


} // kết thúc class php

//<img src="" alt="" title="" width="" height="" />


// tạo ra 1 đối tượng từ class
$image1 = new Image("linh.jpg", "hình ảnh con người", "ảnh", 200, 200);
echo $image1->displayHTML();

echo "<p>dòng 1</p>";
echo "<p>dòng 2</p>";
echo "<p>dòng 3</p>";
echo "<p>dòng 4</p>";
echo "<p>dòng 5</p>";


echo "<br> end script php";

