<?php
/* Controller và method đọc các bản ghi

Trong method này ta đang khởi tạo đối tượng từ class BookModel() và gọi đến method getAll() của class BookModel() để lấy dữ liệu trả về

sau đó sẽ include_once 1 file view để hiển thị*/

class  AuthorController{
    public function index(){
        echo "<br>".__METHOD__;

        //inclde view
        include_once SITE_URL."/mvc/001/view/author/index.php";
    }

    public function create(){
        echo "<br>".__METHOD__;

        // include view
        include_once SITE_URL."/mvc/001/view/athor/create.php";
    }

    public function edit(){
        echo "<br>".__METHOD__;

        // include view
        include_once SITE_URL."/mvc/001/view/athor/edit.php";
    }

    public function delete(){
        echo "<br>".__METHOD__;

        // include view
        include_once SITE_URL."/mvc/001/view/athor/delete.php";
    }
}
