<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathTools;

function bcround(String $number, Int $scale = 0){
    $sign = bccomp($number, "0") > 0 ? "+" : "-";
    $addend = $sign . "0." . str_repeat("0", $scale) . "5";
    return bcadd(bcadd($number, $addend, $scale), "0", $scale);
    // ^ The second bcadd makes sure that things like "-0" are normalized before returning
}
