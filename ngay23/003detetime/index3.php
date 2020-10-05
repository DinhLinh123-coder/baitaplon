<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/26/2020
 * Time: 7:59 PM
 */

// tạo ra thời gian
$time1 = mktime(20,0,0,1,1,2005);
echo "<br> timestamp : " . $time1;

// chuyển về thời gian đọc
echo "<br>" . date("H:i:s d/m/Y", $time1);
