<?php
namespace pack;

use Godzilla\Pack\DesignPack;
use Godzilla\Pack\Icon;

class DesignPackTest extends \Codeception\Test\Unit
{
    /**
     * @var DesignPack $pack
     */
    protected $pack;

    protected function _before()
    {
        $this->pack = new DesignPack('bootstrap');
    }

    protected function _after()
    {
        $this->pack = null;
    }

    // tests
    public function testButtonBootstrap()
    {
        $expected = "<button class='btn btn-primary'><i class='fa fa-icon bolt'></i>Hello</button>";
        $this->assertEquals(
            $expected,
            $this->pack->button('Hello')
                ->withIcon(Icon::POSITION_LEFT, ['font-pack' => 'fa', 'icon' => 'bolt'])
                ->display()
        );
        $this->assertEquals(
            $expected,
            $this->pack->button('Hello')
                ->withLeftIcon(['font-pack' => 'fa', 'icon' => 'bolt'])
                ->display()
        );
    }
}