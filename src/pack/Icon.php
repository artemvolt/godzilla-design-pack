<?php
declare(strict_types=1);

namespace Godzilla\Pack;

/**
 * Interface Icon
 * @package Godzilla\Pack
 */
interface Icon
{
    public function display() : string;
    public function isLeft() : bool;
}