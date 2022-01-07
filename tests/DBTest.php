<?php
use PHPUnit\Framework\TestCase;

final class DBTest extends TestCase
{
    public function testConnection(): void
    {
        $db = new GraftPHP\Framework\DB();

        $this->assertInstanceOf(
            GraftPHP\Framework\DB::class,
            $db,
        );
    }

    public function testTableDoesntExist(): void
    {
        $this->assertEquals(
            false,
            GraftPHP\Framework\DB::tableExists('testtable')
        );
    }

    public function testCreateTable(): void
    {
        $db = new GraftPHP\Framework\DB();
        $db->createTable('testtable');
        $this->assertEquals(
            false,
            GraftPHP\Framework\DB::tableExists('testtable')
        );
    }
}