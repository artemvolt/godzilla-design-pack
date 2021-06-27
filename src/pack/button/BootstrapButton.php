<?php
declare(strict_types=1);

namespace Godzilla\Pack\button;

use Godzilla\Pack\Button;
use Godzilla\Pack\icon\FontAwesomeIcon;
use Godzilla\Pack\Icon;
use RuntimeException;
use Webmozart\Assert\Assert;

/**
 * Class BootstrapButton
 * @package Godzilla\Pack\button
 */
class BootstrapButton extends Button
{
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
    public function withIcon(int $position, array $params = []): self
    {
        Assert::keyExists($params, 'font-pack');

        switch ($params['font-pack']) {
            case 'fa':
                $this->icon = new FontAwesomeIcon($position, $params);
                break;
            default:
                throw new RuntimeException("Unknown font-pack value.");
        }

        return $this;
    }

    /**
     * @param array $params
     * @return Button
     */
    public function withLeftIcon(array $params = []): Button
    {
        return $this->withIcon(Icon::POSITION_LEFT, $params);
    }

    /**
     * @param array $params
     * @return Button
     */
    public function withRightIcon(array $params = []) : Button
    {
        return $this->withIcon(Icon::POSITION_RIGHT, $params);
    }
}