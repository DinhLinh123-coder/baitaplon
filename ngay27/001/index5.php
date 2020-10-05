<?php

function chia($a, $b) {
    if ($b == 0) {
        // nem ra 1 ngoại lệ
        throw new Exception("Bạn không được phép chia cho số 0");
    }

    $c = $a/$b;
    return $c;
}

try {
    echo chia(4,0);
}catch (Exception $e) {
    // khi có 1 ngoại lệ được ném ra bằng lệnh throw thì chạy vào trong catch
    echo "Lỗi cụ thể ";
    echo "<br>";
    echo $e->getMessage();
    echo "<br>";
    echo "<br>" . $e->getCode();
    echo $e->getLine() . " - " . $e->getFile();
}
