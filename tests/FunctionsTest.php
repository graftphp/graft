<?php
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function testUrlSafe(): void
    {
        $this->assertEquals(
            GraftPHP\Framework\Functions::urlSafe('£%@\'---ABCD123'),
            'abcd123'
        );
    }
}