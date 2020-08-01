<?php
use PHPUnit\Framework\TestCase;

const GRAFT_HTTP_ROUTES = [
    ['/', 'TestNamespace\TestController', 'index'],
    ['/objects/{}', 'TestNamespace\TestController', 'show'],
];

final class FrameworkTest extends TestCase
{
    function setUp(): void
    {
        $this->framework = $graftFramework = new GraftPHP\Framework\Framework();
    }

    public function testRouting404(): void
    {
        $this->assertEquals(
            $this->framework->matchRoute('/doesnotexist'),
            false
        );
    }

    public function testRoutingExact(): void
    {
        $this->assertEquals(
            $this->framework->matchRoute(GRAFT_HTTP_ROUTES[0][0]),
            GRAFT_HTTP_ROUTES[0]
        );
    }

    public function testRoutingWildcard(): void
    {
        $url = str_replace('{}', uniqid(), GRAFT_HTTP_ROUTES[1][0]);
        $this->assertEquals(
            $this->framework->matchRoute($url),
            GRAFT_HTTP_ROUTES[1]
        );
    }
}