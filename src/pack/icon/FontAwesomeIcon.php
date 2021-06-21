<?php
declare(strict_types=1);

namespace Godzilla\Pack\icon;

use Godzilla\Pack\Icon;

/**
 * Class FontAwesomeIcon
 * @package Godzilla\Pack\icon
 */
class FontAwesomeIcon extends Icon
{
    /**
     * @var array $params
     */
    protected $params;
    /**
     * @var int $position
     */
    protected $position;

    public function __construct(int $position, array $params = [])
    {
        $this->params = $params;
        $this->position = $position;
    }

    public function display(): string
    {
        $icon = null;
        if (array_key_exists('icon', $this->params)) {
            $icon = $this->params['icon'];
        }
        return "<i class='fa fa-icon {$icon}'></i>";
    }

    public function isLeft(): bool
    {
        return $this->position === Icon::LEFT;
    }

    public function isRight(): bool
    {
        return $this->position === Icon::RIGHT;
    }
}