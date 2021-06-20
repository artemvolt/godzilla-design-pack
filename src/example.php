<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Godzilla\Pack\DesignPack;

$pack = new DesignPack('bootstrap');
/**
 * <div class='btn btn-primary'>
 *      <i class='fa fa-icon bolt'></i>
 *      hello
 * </div>
 */
$button = $pack->button(['content' => 'hello'])->withIcon(['position' => 'left', 'type' => 'fa', 'icon' => 'bolt']);
echo $button->display();
?>

