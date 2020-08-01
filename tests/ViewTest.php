<?php
use PHPUnit\Framework\TestCase;

final class ViewTest extends TestCase
{
    public function testBasicView(): void
    {
        $this->assertEquals(
            GraftPHP\Framework\View::Render('tests.basic',null,null,true),
            'HELLO WORLD'
        );
    }

    public function testTemplateView(): void
    {
        $this->assertEquals(
            GraftPHP\Framework\View::Render('tests.template_child',null,null,true),
            'TEMPLATECHILD'
        );
    }

    public function testTemplateEmbed(): void
    {
        $this->assertEquals(
            GraftPHP\Framework\View::Render('tests.embed_parent',null,null,true),
            'PARENTCHILD'
        );
    }
}