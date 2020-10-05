<?php
class TagLink {

    public $href = "";
    public $target = "";
    public $title = "";
    public $text = "";

    // tạo 1 phương thức
    public function __construct($href, $text, $target = "", $title = "") {
        echo "<br>".__METHOD__;

        // lấy các tham số truyền và gán vào cho các thuộc tính của class
        $this->href = $href;
        $this->text = $text;
        $this->target = $target;
        $this->title = $title;

        $a = "<a href=\"$this->href\" target=\"$this->target\" title=\"$this->title\">$this->text</a>";

       echo $a;

    }

}

// <a href="" target="" title="">text</a>

// tạo ra 1 class hiển thị thẻ a trong html
// sử dụng các thuộc tính cho class này
// và tạo 1 phương thức để hiển thị

$kenh14 = new TagLink();
echo $kenh14->displayHTML("https://kenh14.vn/", "kenh 14", "_blank", "kenh 14");
