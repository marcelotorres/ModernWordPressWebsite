<?php

namespace MWW;

use MWW\Route;
use MWW\Frontend\Assets;
use MWW\Frontend\Navigation;

class Core
{
    /**
    *   Bootstraps the Website
    */
    public function run()
    {
        $this->setUp();

        // Do the magic here
        $route = new Route;
        add_action('parse_query', [$route, 'routeRequest'], 100);
    }

    /**
     * Initial setUp
     */
    private function setUp()
    {
        $this->loadHelpers();
        $this->loadAssets();
        Assets::removeEmojis();
        Assets::registerCustomImageSizes();
        Navigation::registerMenu();
    }

    /**
     * Procedural Helper Functions
     */
    private function loadHelpers()
    {
        require_once(MWW_PATH . '/src/helpers.php');
    }

    /**
     * Enqueues CSS and JS
     */
    private function loadAssets()
    {
        if (!is_admin() && !is_wp_login()) {
            $assets = new Assets;
            add_action('wp_enqueue_scripts', [$assets, 'removeDefaultJquery']);
            add_action('wp_enqueue_scripts', [$assets, 'enqueueStyles']);
            add_action('wp_enqueue_scripts', [$assets, 'enqueueJavascripts']);
        }
    }
}
