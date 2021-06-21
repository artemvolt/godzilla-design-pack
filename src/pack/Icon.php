<?php

namespace Godzilla\Pack;

abstract class Icon
{
    /**
     * The constant is responsible for positioning the image to the left
     */
    public const LEFT = 1;
    /**
     * The constant is responsible for positioning the image to the right
     */
    public const RIGHT = 2;

    abstract public function display(): string;
    abstract public function isLeft(): bool;
    abstract public function isRight(): bool;
}