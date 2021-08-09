<?php
declare(strict_types=1);

namespace Godzilla\Pack;

use Godzilla\Pack\button\BootstrapButton;
use Godzilla\Pack\button\DefaultButton;
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

    public function button(string $content, array $params = []) : Button
    {
        switch ($this->theme) {
            case 'bootstrap':
                return new BootstrapButton($content, $params);
            default:
                return new DefaultButton($content, $params);
        }
    }
}