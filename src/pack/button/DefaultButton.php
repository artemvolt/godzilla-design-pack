<?php

namespace Godzilla\Pack\button;

use Godzilla\Pack\Button;
use Godzilla\Pack\Icon;
use RuntimeException;

/**
 * Class DefaultButton
 * @package Godzilla\Pack\button
 */
class DefaultButton extends Button
{
    public function display(): string
    {
        throw new RuntimeException("Need implement method");
    }

    public function content(string $content): Button
    {
        throw new RuntimeException("Need implement method");
    }

    public function withIcon(int $position, array $params): Button
    {
        throw new RuntimeException("Need implement method");
    }

    public function withLeftIcon(array $params): Button
    {
        throw new RuntimeException("Need implement method");
    }

    public function withRightIcon(array $params): Button
    {
        throw new RuntimeException("Need implement method");
    }
}