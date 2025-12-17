<?php

$val1 = "1000000000000000000000000000001";
$val2 = "465";

var_dump([
    $val1 + $val2,
    bcadd($val1, $val2, 0)
]);