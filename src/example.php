<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Godzilla\Pack\DesignPack;
use Godzilla\Pack\Icon;

$pack = new DesignPack('bootstrap');
/**
 * <div class='btn btn-primary'>
 *      <i class='fa fa-icon bolt'></i>
 *      hello
 * </div>
 */
echo $pack->button('Hello')
    ->withIcon(Icon::POSITION_LEFT, ['font-pack' => 'fa', 'icon' => 'bolt'])
    ->display() . PHP_EOL;

echo $pack->button('Hello')
    ->withLeftIcon(['font-pack' => 'fa', 'icon' => 'bolt'])
    ->display() . PHP_EOL;

