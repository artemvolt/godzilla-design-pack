<?php

namespace Godzilla\Pack;

use Godzilla\Pack\icon\NoneExistentIcon;
use Webmozart\Assert\Assert;

/**
 * Interface Button
 * @package Godzilla\Pack
 */
abstract class Button
{
    /**
     * @var string $content
     */
    protected $content;
    /**
     * @var array
     */
    protected $params;

    /**
     * @var Icon $icon
     */
    protected $icon;

    public function __construct(string $content, array $params = [])
    {
        $this->content = $content;
        $this->params = $params;
        $this->icon = new NoneExistentIcon();

        if (array_key_exists('icon', $params)) {
            Assert::isInstanceOf($params['icon'], Icon::class);
            $this->icon = $params['icon'];
        }
    }

    /**
     * @return string
     */
    abstract public function display() : string;

    /**
     * @param string $content
     * @return $this
     */
    abstract public function content(string $content): Button;

    /**
     * @param int $position
     * @param array $params
     * @return Button
     */
    abstract public function withIcon(int $position, array $params): Button;

    /**
     * @param array $params
     * @return Button
     */
    abstract public function withLeftIcon(array $params): Button;

    /**
     * @param array $params
     * @return Button
     */
    abstract public function withRightIcon(array $params): Button;
}