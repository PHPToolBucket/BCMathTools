<?php declare(strict_types = 1);

namespace PHPToolBucket\BCMathToolsTests;

use PHPUnit\Framework\TestCase;
use function PHPToolBucket\BCMathTools\bciswhole;

class bciswholeTest extends TestCase
{
    public function test(){
        self::assertTrue(bciswhole("40", 0));
        self::assertTrue(bciswhole("40.", 0));

        self::assertTrue(bciswhole("40.1", 0));
        self::assertTrue(bciswhole("40.01", 1));
        self::assertTrue(bciswhole("40.001", 2));
        self::assertTrue(bciswhole("40.0001", 3));
        self::assertTrue(bciswhole("40.00001", 4));

        self::assertFalse(bciswhole("40.1", 1));
        self::assertFalse(bciswhole("40.01", 2));
        self::assertFalse(bciswhole("40.001", 3));
        self::assertFalse(bciswhole("40.0001", 4));
        self::assertFalse(bciswhole("40.00001", 5));

        self::assertFalse(bciswhole("40.1", 2));
        self::assertFalse(bciswhole("40.01", 3));
        self::assertFalse(bciswhole("40.001", 4));
        self::assertFalse(bciswhole("40.0001", 5));
        self::assertFalse(bciswhole("40.00001", 6));
    }
}
