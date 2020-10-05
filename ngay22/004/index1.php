<?php
function check($pattern, $str){
    if(preg_match($pattern, $str) == 1)
        return true;
    else
        return false;
}
if(isset($_POST['btn-submit'])){
    $errow = [];
    extract($_REQUEST);
    $patter1 = "/([^\d]*)\s([^\d]*)/i";
    $patter2 = "/^[0-9]{10}$/i";
    $patter3 = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/i";
    $patter4 = "/^([a-zA-Z0-9]{3,})@([a-zA-Z0-9]{3,})/i";
    $patter5 = "/^(https:\/\/github\.com\/)([a-zA-Z0-9]{3,})$/i";
    if(check($patter1, $name) == false){
        $errow[0] = 'Tên chưa hợp lệ';
    }
    if(check($patter2, $phone) == false)
        $errow[1] = 'Số điện thoại chưa hợp lệ';
    if(check($patter3, $email) == false)
        $errow[2] = 'Email chưa hợp lệ';
    if(check($patter4, $birthday) == false)
        $errow[3] = 'Ngày tháng  chưa hợp lệ';
    if(check($patter5, $website) == false)
        $errow[4] = 'Link chưa hợp lệ';
    if($number < 0 || $number > 10)
        $errow[5] = 'Điểm chưa hợp lệ';
    $x = explode(' ',$note);
    if(count($x) > 200)
        $errow[6] = 'Note chưa hợp lệ';
    if(count($errow) ==0){
        header("location:profile.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Profile</h1>
<form name="profile" method="post">
    <div>
        <label>Tên sinh viên</label>
        <p style="font-size: 10px">Nhập đủ họ tên ( tối thiểu phải có hai chữ )</p>
        <input type="text" name="name" value="" autocomplete="off">
        <p><?=isset($errow[0])?$errow[0]:''?></p>
    </div>
    <div>
        <label>Số điện thoại sinh viên</label>
        <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
        <input type="text" name="phone" value="" autocomplete="off">
        <p><?=isset($errow[1])?$errow[1]:''?></p>
    </div>
    <div>
        <label>Email sinh viên</label>
        <input type="email" name="email" value="" autocomplete="off">
        <p><?=isset($errow[2])?$errow[2]:''?></p>
    </div>
    <div>
        <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
        <input type="text" name="birthday" value="" autocomplete="off">
        <p><?=isset($errow[3])?$errow[3]:''?></p>
    </div>
    <div>
        <label>Giới tính</label>
        <input type="radio" name="gender" value="1"> Nam
        <input type="radio" name="gender" value="0"> Nữ
    </div>
    <div>
        <label>Link github ( bắt đầu bằng https://github.com/username</label>
        <input type="text" name="website" value="" autocomplete="off">
        <p><?=isset($errow[4])?$errow[4]:''?></p>
    </div>
    <div>
        <label>Điểm sinh viên (0 - 10)</label>
        <input type="number" name="number" value="" autocomplete="off">
        <p><?=isset($errow[5])?$errow[5]:''?></p>
    </div>
    <div>
        <p>Ghi chú ( chỉ được nhập tối đa 200 chữ )</p>
        <textarea name="note" cols="50" rows="10"></textarea>
        <p><?=isset($errow[6])?$errow[6]:''?></p>
    </div>
    <div>
        <input type="submit" name="btn-submit" value="In thông tin" autocomplete="off">
    </div>
</form>
</body>
</html>