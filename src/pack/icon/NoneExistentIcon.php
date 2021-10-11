<?php
declare(strict_types=1);

namespace Godzilla\Pack\icon;

use Godzilla\Pack\Icon;
use RuntimeException;

class NoneExistentIcon extends Icon
{
    public function display(): string
    {
        throw new RuntimeException("Need implement method");
    }

    public function isLeft(): bool
    {
        throw new RuntimeException("Need implement method");
    }

    public function isRight(): bool
    {
        throw new RuntimeException("Need implement method");
    }

    public function isExistent(): bool
    {
        return false;
    }
}