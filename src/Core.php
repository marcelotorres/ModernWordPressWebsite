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
        if (!is_admin() && !is_wp_login()) {
            $this->loadAssets();
        }

        // Removes emojis that WordPress adds by default
        Assets::removeEmojis();

        // Register a few useful custom image sizes
        Assets::registerCustomImageSizes();

        // Add menu support for theme and registers a main menu
        Navigation::registerMenu();
    }

    /**
     * Enqueues CSS and JS
     */
    private function loadAssets()
    {
        $assets = new Assets;
        add_action('wp_enqueue_scripts', [$assets, 'removeDefaultJquery']);
        add_action('wp_enqueue_scripts', [$assets, 'enqueueStyles']);
        add_action('wp_enqueue_scripts', [$assets, 'enqueueJavascripts']);
    }
}
