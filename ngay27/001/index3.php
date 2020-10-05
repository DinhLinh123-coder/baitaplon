<?php
function chia ($a, $b) {
    if($b==0){
        throw new Exception("Bạn không được phép chia cho số 0");
    }
    $c= $a/$b;
    return $c;
}
echo chia(4,0);