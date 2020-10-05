<?php
class BookModel extends Database{
    public $table="books";

    public function getAll(){
        $sqlSelect="SELECT * FROM $this->table"; //hương thức method getAll() sẽ lấy ra tất cả các bản ghi trong bảng books và trả về cho biến $result

        /**

         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql

         * tham số 1 chính là biến kết nối CSDL $connection

         * tham số 2 chính là câu query sql

         */

        $result = mysqli_query($this->connection, $sqlSelect);
    //Thuộc tính $this->connection là thuộc tính mà model này kế thừa từ class Database
    //Thuộc tính này nằm trong class Database và chứa kết nối đến CSDL


        return $result;

    }

    public function getSingle($book_id=0){ //Phương thức public function getSingle($book_id = 0) sẽ đòi hỏi phải truyền vào 1 tham số chứa id của bản ghi và chúng ta muốn lấy ra

       // Phương thức này sẽ trả về 1 bản ghi với id cụ thể trong bảng books
        $sqlSelect="SELECT * FROM $this->table WHERE id=".$book_id;
        $result= mysqli_query($this->connection, $sqlSelect);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

    public function store($data){
        $book_name= $data["book_name"];
        $book_price=$data["book_price"];
        $book_intro=$data["book_intro"];

        if(empty($book_name) || empty($book_price) || empty($book_intro)){
            // empty: kiểm tra rỗng or =0
            return false;
        }
        $sqlInsert="insert into $this->table(book_name,book_price,book_intro) values ('$book_name', '$book_price', '$book_intro') ";
        if (mysqli_query($this->connection, $sqlInsert)){
            return true;
        }
        return false;
    }

    public function update($data){

        $book_name=$data["book_name"];
        $book_price=$data["book_price"];
        $book_intro=$data["book_intro"];
        $id=(int)$data['id'];

        if(!$id || empty($book_name) || empty($book_price) ||empty($book_intro)){
            return false;
        }

        $sql="update $this->table set book_name='$book_name', book_price='book_price', book_intro='book_intro' where id=" . (int)$id;

        echo "<br>". $sql;
        

        if (mysqli_query($this->connection, $sql)){
            echo "Update thanh cong";
            header('Location: index.php');
            exit;
        }else{
            return false;
        }

    }

    public function delete($id){
        $sqlDelete="delete from $this->table where id=$id";
        if(mysqli_query($this->connection, $sqlDelete)){
            return true;
        }
        return false;
    }
}