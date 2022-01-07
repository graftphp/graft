<?php
use PHPUnit\Framework\TestCase;

const GRAFT_CONFIGPATH = 'app/sample.config.php';
if (!file_exists(GRAFT_CONFIGPATH)) {
    die('Config file missing');
}
require GRAFT_CONFIGPATH;


final class FrameworkTest extends TestCase
{
    function setUp(): void
    {
        $this->framework = $graftFramework = new GraftPHP\Framework\Framework();
    }

    public function testRouting404(): void
    {
        $this->assertEquals(
            false,
            $this->framework->matchRoute('/doesnotexist')
        );
    }

    public function testRoutingExact(): void
    {
        $this->assertEquals(
            GRAFT_HTTP_ROUTES[0],
            $this->framework->matchRoute(GRAFT_HTTP_ROUTES[0][0])
        );
    }

    public function testRoutingWildcard(): void
    {
        $url = str_replace('{}', uniqid(), GRAFT_HTTP_ROUTES[2][0]);
        $this->assertEquals(
            GRAFT_HTTP_ROUTES[2],
            $this->framework->matchRoute($url)
        );
    }
}