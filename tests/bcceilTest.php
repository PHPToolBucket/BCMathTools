<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathToolsTests;

use PHPUnit\Framework\TestCase;
use function PHPToolBucket\BCMathTools\bcceil;

class bcceilTest extends TestCase
{
    public function datax(){
        $data[] = ["0", "1"];
        $data[] = ["-0", "0"];

        $data[] = ["5", "6"];
        $data[] = ["55", "56"];

        $data[] = ["-5", "-5"];
        $data[] = ["-55", "-55"];

        foreach($data as [$whole, $nextWhole]){
            foreach([4, 5, 6] as $digit){
                foreach(["", "0", "00", "000"] as $zb){
                    foreach(["", "0", "00", "000"] as $za){
                        yield [$whole . "." . $zb . $digit . $za, $nextWhole];
                    }
                }
            }
        }
    }

    /** @dataProvider datax */
    public function test_non_ceiled(String $number, String $nextWhole){
        $ceiled = bcceil($number);
        self::assertSame($nextWhole, $ceiled);
    }

    public function data_test_already_ceiled(){
        $data[] = ["0", "0"];
        $data[] = ["-0", "0"];

        $data[] = ["5", "5"];
        $data[] = ["55", "55"];

        $data[] = ["-5", "-5"];
        $data[] = ["-55", "-55"];

        yield from $data;
    }

    /** @dataProvider data_test_already_ceiled */
    public function test_already_ceiled(String $whole, String $wholeNormalized){
        self::assertSame($wholeNormalized, bcceil($whole . "."));
        self::assertSame($wholeNormalized, bcceil($whole . ".0"));
        self::assertSame($wholeNormalized, bcceil($whole . ".00"));
        self::assertSame($wholeNormalized, bcceil($whole . ".000"));
        self::assertSame($wholeNormalized, bcceil($whole . ".0000"));
    }
}
