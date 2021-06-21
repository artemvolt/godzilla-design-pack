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
    ->icon(Icon::LEFT, [
        'type' => 'fa', 'icon' => 'bolt'
    ])
    ->display();

echo $pack->button('Hello')
    ->leftIcon(['type' => 'fa', 'icon' => 'bolt'])
    ->display();

