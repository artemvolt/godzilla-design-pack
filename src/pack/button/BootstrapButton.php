<?php
declare(strict_types=1);

namespace Godzilla\Pack\button;

use Godzilla\Pack\Button;
use Godzilla\Pack\icon\FontAwesomeIcon;
use Godzilla\Pack\Icon;
use Webmozart\Assert\Assert;

/**
 * Class BootstrapButton
 * @package Godzilla\Pack\button
 */
class BootstrapButton implements Button
{
    /**
     * @var string $content
     */
    protected $content;
    /**
     * @var array $params
     */
    protected $params;
    /**
     * @var Icon $icon
     */
    protected $icon;

    public function __construct(string $content, array $params)
    {
        $this->params = $params;
        $this->content = $content ?? "";
    }

    public function display(): string
    {
        if ($this->icon->isLeft()) {
            return "<button class='btn btn-primary'>" .
                $this->icon->display() .
                $this->content .
                "</button>";
        }

        if ($this->icon->isRight()) {
            return "<button class='btn btn-primary'>" .
                $this->content .
                $this->icon->display() .
                "</button>";
        }
        return "<button class='btn btn-primary'>" . $this->content . "</button>";
    }

    public function content(string $content): Button
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param int $position
     * @param array $params
     * @return $this
     */
    public function icon(int $position = Icon::LEFT, array $params = []): Button
    {
        Assert::keyExists($params, 'type');
        $withOutType = $params;
        unset($withOutType['type']);

        switch ($params['type']) {
            case 'fa':
                $this->icon = new FontAwesomeIcon($position, $withOutType);
                break;
            default:
                break;
        }

        return $this;
    }

    /**
     * @todo После обсуждаения добавить/удалить
     * @param array $params
     * @return Button
     */
    public function leftIcon(array $params = []): Button
    {
        Assert::keyExists($params, 'type');
        $withOutType = $params;
        unset($withOutType['type']);

        switch ($params['type']) {
            case 'fa':
                $this->icon = new FontAwesomeIcon(Icon::LEFT, $withOutType);
                break;
            default:
                break;
        }

        return $this;
    }
}