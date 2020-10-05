<?php
function chia ($a, $b) {
    if ($b == 0){
        // ném ra 1 ngoại lệ
        throw new Exception("bạn không được phép chia cho số 0");

    }
    $c= $a/$b;
    return $c;
}
try {

    echo chia(4, 0);
}catch (Exception $e){
    // khi có 1 ngoại lệ được ném ra bằng lệnh throw thì chạy vào cath
    echo "không thể thực hiện phép chia !";
}