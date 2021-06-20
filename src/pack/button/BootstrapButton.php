<?php
declare(strict_types=1);

namespace Godzilla\Pack\button;

use Godzilla\Pack\Button;
use Godzilla\Pack\Icon;
use Godzilla\Pack\icon\FontAwesomeIcon;
use Webmozart\Assert\Assert;

/**
 * Class BootstrapButton
 * @package Godzilla\Pack\button
 */
class BootstrapButton implements Button
{
    protected $content;
    protected $params;
    /**
     * @var Icon $icon
     */
    protected $icon;

    public function __construct(array $params)
    {
        $this->params = $params;
        $this->content = $params['content'] ?? "";
    }

    public function display(): string
    {
        if ($this->icon->isLeft()) {
            return "<div class='btn btn-primary'>" .
                $this->icon->display() .
                $this->content .
                "</div>";
        }
        return "<div class='btn btn-primary'>" . $this->content . "</div>";
    }

    public function content(string $content): Button
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function withIcon(array $params)
    {
        Assert::keyExists($params, 'type');
        $withOutType = $params;
        unset($withOutType['type']);

        switch ($params['type']) {
            case 'fa':
                $this->icon = new FontAwesomeIcon($withOutType);
                break;
        }

        return $this;
    }
}