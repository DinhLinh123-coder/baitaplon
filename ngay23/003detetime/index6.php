<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
</head>
<body>

<?php
if (isset($_POST) && !empty($_POST)) {

    if (isset($_POST["begin"]) && $_POST["begin"] && isset($_POST["end"]) && $_POST["end"]) {
        $begin = $_POST["begin"];
        $end = $_POST["end"];
        echo "<br> thời gian bắt đầu : " . $begin;
        echo "<br> thời gian kết thúc : " . $end;

        $beginTime = strtotime($begin);
        $endTime = strtotime($end);
        echo "<br> time begin : " . $beginTime;
        echo "<br> time end : " . $endTime;

        if ($endTime > $beginTime) {
            $timeLease = $endTime - $beginTime;
            $timeLeaseDay = $timeLease/86400;
            $timeLeaseDay = ceil($timeLeaseDay);
            echo "<br> thời gian thuê : " . $timeLease;
            echo "<br> thời gian thuê theo ngày : " . $timeLeaseDay;
        } else {
            echo "<br> thời gian không hợp lệ";
        }
    }

}
?>

<pre>
        phòng đơn 1 ngày : 200k
        phòng đối 1 ngày : 400k
        phòng VIP 1 ngày : 1.000k
        + giặt là + 1 triệu
        + ăn sáng + 500k
        + taxi + 1.000 k
    </pre>
<div class="container">
    <form name="demo" action="" method="post">

        <div class="form-group">
            <label>Thời gian bắt đầu thuê</label>
            <input type="text" name="begin" id="begin" class="form-control" value="">
        </div>
        <div>
            <label>Thời gian kết thúc thuê</label>
            <input type="text" name="end" id="end" value="">
        </div>
        <div>
            <label>Loại phòng</label>
            <select name="roomtype">
                <option value="1">Phòng đơn</option>
                <option value="2">Phòng đôi</option>
                <option value="3">Phòng VIP</option>
            </select>
        </div>

        <div>

        </div>



        <div>
            Dịch vụ cộng thêm
            <input type="checkbox" name="service_gl" value="gl">
            Giặt là
            <br>
            <input type="checkbox" name="service_as" value="as">
            Ăn sáng
            <input type="checkbox" name="service_tx" value="tx">
            Taxi
        </div>

        <input type="submit" name="submit" value="Đặt phòng">
    </form>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="bootstrap-datetimepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>

<script src="bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('#begin').datetimepicker({
            format:"YYYY-MM-DD HH:mm:ss",
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'fas fa-calendar-check',
                clear: 'far fa-trash-alt',
                close: 'far fa-times-circle'
            }
        });

        $('#end').datetimepicker({
            format:"YYYY-MM-DD HH:mm:ss",
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'fas fa-calendar-check',
                clear: 'far fa-trash-alt',
                close: 'far fa-times-circle'
            }
        });
    });
</script>

</body>
</html>