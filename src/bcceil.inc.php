<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathTools;

function bcceil(String $number): String{
    if(strpos($number, ".") === FALSE){
        return $number;
    }

    if(preg_match("/\.0*$/", $number) === 1){
        return bcround($number, 0);
    }

    if($number[0] === "-"){
        return bcadd(bcsub($number, "0", 0), "0");
    }

    return bcadd($number, "1", 0);
}
