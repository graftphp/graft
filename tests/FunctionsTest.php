<?php
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function testUrlSafe(): void
    {
        $this->assertEquals(
            'abcd123',
            GraftPHP\Framework\Functions::urlSafe('£%@\'---ABCD123')
        );
    }
}