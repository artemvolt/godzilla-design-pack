<?php
declare(strict_types=1);

namespace Godzilla\Pack;

use Godzilla\Pack\button\BootstrapButton;
use Godzilla\Pack\button\HtmlButton;
use Webmozart\Assert\Assert;

/**
 * Class DesignPack
 * @package Godzilla\Pack
 */
class DesignPack
{
    protected $theme;

    public function __construct(string $theme)
    {
        Assert::oneOf($theme, ['bootstrap']);
        $this->theme = $theme;
    }

    public function withTheme(string $theme) : self
    {
        $this->theme = $theme;
        return $theme;
    }

    public function button(string $content) : Button
    {
        switch ($this->theme) {
            case 'bootstrap':
                // @todo Реализовать передачу $params
                return new BootstrapButton($content, []);
            default:
                return new HtmlButton();
        }
    }
}