<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathToolsTests;

use function PHPToolBucket\BCMathTools\bcround;
use PHPUnit\Framework\TestCase;

class bcroundTest extends TestCase
{
    public function test(){
        self::assertSame("55.000", bcround("55", 3));
        self::assertSame("55.500", bcround("55.5", 3));
        self::assertSame("55.550", bcround("55.55", 3));
        self::assertSame("55.555", bcround("55.555", 3));

        self::assertSame("56", bcround("55.5", 0));
        self::assertSame("55.6", bcround("55.55", 1));
        self::assertSame("55.56", bcround("55.555", 2));
        self::assertSame("55.556", bcround("55.5555", 3));

        self::assertSame("-56", bcround("-55.5", 0));
        self::assertSame("-55.6", bcround("-55.55", 1));
        self::assertSame("-55.56", bcround("-55.555", 2));
        self::assertSame("-55.556", bcround("-55.5555", 3));

        self::assertSame("33", bcround("33.3", 0));
        self::assertSame("33.3", bcround("33.33", 1));
        self::assertSame("33.33", bcround("33.333", 2));
        self::assertSame("33.333", bcround("33.3333", 3));

        self::assertSame("-33", bcround("-33.3", 0));
        self::assertSame("-33.3", bcround("-33.33", 1));
        self::assertSame("-33.33", bcround("-33.333", 2));
        self::assertSame("-33.333", bcround("-33.3333", 3));

        self::assertSame("-33", bcround("-33.3", 0));
        self::assertSame("-33.3", bcround("-33.33", 1));
        self::assertSame("-33.33", bcround("-33.333", 2));
        self::assertSame("-33.333", bcround("-33.3333", 3));

        self::assertSame("78", bcround("77.7", 0));
        self::assertSame("77.8", bcround("77.77", 1));
        self::assertSame("77.78", bcround("77.777", 2));
        self::assertSame("77.778", bcround("77.7777", 3));

        self::assertSame("-78", bcround("-77.7", 0));
        self::assertSame("-77.8", bcround("-77.77", 1));
        self::assertSame("-77.78", bcround("-77.777", 2));
        self::assertSame("-77.778", bcround("-77.7777", 3));

        self::assertSame("100", bcround("99.9", 0));
        self::assertSame("100.0", bcround("99.99", 1));
        self::assertSame("100.00", bcround("99.999", 2));
        self::assertSame("100.000", bcround("99.9999", 3));

        self::assertSame("-100", bcround("-99.9", 0));
        self::assertSame("-100.0", bcround("-99.99", 1));
        self::assertSame("-100.00", bcround("-99.999", 2));
        self::assertSame("-100.000", bcround("-99.9999", 3));
    }
}
