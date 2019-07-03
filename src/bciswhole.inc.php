<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathTools;

function bciswhole(String $number, Int $scale): Bool{
    $number = bcadd($number, "0", $scale);
    return strpos($number, ".") === FALSE || preg_match("/\.0*$/", $number) === 1;
}
