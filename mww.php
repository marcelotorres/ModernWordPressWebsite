<?php
/*
 * Plugin Name: Modern WordPress Website
 * Plugin URI: https://github.com/Luc45/Modern-WordPress-Website
 * Description: This is the theme for the website. Do not deactivate this plugin.
 * Version: 1.0
 * Author: Lucas Bustamante
 * Author URI: https://www.lucasbustamante.com.br
 * License: GPL2
 */

// Composer autoloader
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once(__DIR__ . '/vendor/autoload.php');
} else {
    throw new Exception('You need to run "composer update" in the following folder "' . __DIR__ . '" to get started.');
}

require_once(__DIR__ . '/src/helpers.php');

// Constants we will use later on
define('MWW_PATH', __DIR__);
define('MWW_URL', plugin_dir_url(__FILE__));

// Bootstraps the Website
$mwt = new MWW\Core;
$mwt->run();
