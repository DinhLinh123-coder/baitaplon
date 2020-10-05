<?php
class TagLink {
    public $href="";
    public $target="";
    public $title="";

    public function display($href, $target="", $title=""){

        $this->href=$href;
        $this->target=$target;
        $this->title=$title;

        $taglink="<a href=\"$this->href\" target=\"$this->target\" title=\"$this->title\">FB: Đinh Thị Thùy Linh</a>";

        return $taglink;

    }



}

$taglink1= new TagLink();
echo $taglink1->display('https://www.facebook.com/profile.php?id=100026030002521', '_blank', 'Link');

// <a href="" target="" title=""></a>

// tạo ra 1 class hiển thị thẻ a trong html
// sử dụng các thuộc tính cho class này
// và tạo 1 phương thức để hiển thị
