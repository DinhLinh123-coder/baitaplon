<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Profile</h1>
<form name="profile" method="post" action="">
    <div>
        <label>Tên sinh viên</label>
        <p style="font-size: 10px">Nhập đủ họ tên ( tối thiểu phải có hai chữ )</p>
        <input type="text" name="name" value="" autocomplete="off">
    </div>
    <div>
        <label>Số điện thoại sinh viên</label>
        <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
        <input type="text" name="phone" value="" autocomplete="off">
    </div>
    <div>
        <label>Email sinh viên</label>
        <input type="email" name="email" value="" autocomplete="off">
    </div>
    <div>
        <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
        <input type="text" name="birthday" value="" autocomplete="off">
    </div>
    <div>
        <label>Giới tính</label>
        <input type="radio" name="gender" value="1"> Nam
        <input type="radio" name="gender" value="0"> Nữ
    </div>
    <div>
        <label>Link github ( bắt đầu bằng https://github.com/username</label>
        <input type="text" name="website" value="" autocomplete="off">
    </div>
    <div>
        <label>Điểm sinh viên (0 - 10)</label>
        <input type="number" name="point" value="" autocomplete="off">
    </div>
    <div>
        <input type="submit" name="sumbit" value="In thông tin" autocomplete="off">
    </div>
</form>

</body>
</html>
