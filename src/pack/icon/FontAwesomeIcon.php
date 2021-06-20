<?php
declare(strict_types=1);

namespace Godzilla\Pack\icon;

use Godzilla\Pack\Icon;

/**
 * Class FontAwesomeIcon
 * @package Godzilla\Pack\icon
 */
class FontAwesomeIcon implements Icon
{
    protected $params;

    public function __construct(array $params = [])
    {
        $this->params = $params;
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
        return $this->params['position'] === 'left';
    }
}