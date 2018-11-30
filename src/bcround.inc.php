<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathTools;

function bcround(String $number, Int $scale = 0){
    $sign = bccomp($number, "0") > 0 ? "+" : "-";
    return bcadd($number, $sign . "0." . str_repeat("0", $scale) . "5", $scale);
}
