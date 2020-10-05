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

    <?php

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // giá tiền theo phòng
    $price = 0;

    if (isset($_POST["roomtype"]) && in_array($_POST["roomtype"], [1,2,3])
    && isset($_POST["days"])) {

       $roomPrices= [];
       $roomPrices[1]=200000;
       $roomPrices[2]=400000;
       $roomPrices[3]=1000000;
        $roomtype = $_POST["roomtype"];
        $price = $roomPrices[$roomtype];

        // số ngày khách thuê
        $days = ($_POST["days"] > 0) ? (int) $_POST["days"] : 0;

        // giá tiền tất cả các ngày
        $room_payment = $price*$days;

        if (isset($_POST["service_gl"]) && ($_POST["service_gl"] == "gl")) {
            $room_payment += 1000000;
        }

        if (isset($_POST["service_as"]) && ($_POST["service_as"] == "as")) {
            $room_payment += 500000;
        }

        if (isset($_POST["service_tx"]) && ($_POST["service_tx"] == "tx")) {
            $room_payment += 1000000;
        }

    }

    ?>

    <p>Tổng tiền : <?php echo isset($room_payment) ? $room_payment : "" ?></p>

</body>
</html>