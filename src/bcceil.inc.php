<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathTools;

function bcceil(String $number): String{
    if(bciswhole($number, 100)){ // @TODO scale param
        return bcround($number, 0);
    }

    if($number[0] === "-"){
        return bcadd(bcsub($number, "0", 0), "0");
    }

    return bcadd($number, "1", 0);
}
