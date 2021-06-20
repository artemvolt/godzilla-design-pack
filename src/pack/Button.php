<?php

namespace Godzilla\Pack;

/**
 * Interface Button
 * @package Godzilla\Pack
 */
interface Button
{
    /**
     * @return string
     */
    public function display() : string;

    /**
     * @param string $content
     * @return $this
     */
    public function content(string $content);

    /**
     * @param array $params
     * @return $this
     */
    public function withIcon(array $params);
}