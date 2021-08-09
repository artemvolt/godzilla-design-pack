<?php

namespace Godzilla\Pack;

/**
 * Class Icon
 * @package Godzilla\Pack
 */
abstract class Icon
{
    /**
     * The constant is responsible for positioning the image to the left
     */
    const POSITION_LEFT = 1;
    /**
     * The constant is responsible for positioning the image to the right
     */
    const POSITION_RIGHT = 2;

    abstract public function display(): string;
    abstract public function isLeft(): bool;
    abstract public function isRight(): bool;
    abstract public function isExistent(): bool;
}