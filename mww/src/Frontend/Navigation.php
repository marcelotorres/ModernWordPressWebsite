<?php

namespace MWW\Frontend;

class Navigation
{
    /**
     * Register the hooks for the navigation
     */
    public static function registerHookMenu()
    {
        add_action('init', [self, 'registerMenu']);
    }

    /**
     * Register the menu
     * https://codex.wordpress.org/Navigation_Menus
     */
    public function registerMenu()
    {
        register_nav_menu('main-menu', __('Main Menu'));
    }
}
