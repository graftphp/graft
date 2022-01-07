<?php
use PHPUnit\Framework\TestCase;

final class ViewTest extends TestCase
{
    public function testBasicView(): void
    {
        $this->assertEquals(
            'HELLO WORLD',
            GraftPHP\Framework\View::Render('tests.basic',null,null,true)
        );
    }

    public function testTemplateView(): void
    {
        $this->assertEquals(
            'TEMPLATECHILD',
            GraftPHP\Framework\View::Render('tests.template_child',null,null,true)
        );
    }

    public function testTemplateEmbed(): void
    {
        $this->assertEquals(
            'PARENTCHILD',
            GraftPHP\Framework\View::Render('tests.embed_parent',null,null,true)
        );
    }
}