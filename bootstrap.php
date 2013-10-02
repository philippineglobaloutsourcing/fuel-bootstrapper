<?php

/**
 * Bootstrapper
 *
 * A clean package for starting my packages
 *
 * @package    Bootstrapper
 * @version    1.0
 * @author     Christopher John Cubos
 * @link       http://github.com/philippineglobaloutsourcing
 */

Autoloader::add_core_namespace('Bootstrapper');

Autoloader::add_classes(array(
	'Bootstrapper\\Bootstrapper' => __DIR__.'/classes/bootstrapper.php'
));
