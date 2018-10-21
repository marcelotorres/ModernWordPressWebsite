<?php

namespace MWW;

use MWW\Pages\HomeController;
use MWW\Pages\NotFoundController;

class Route
{
    /**
     * Routes the request to the appropriate Controller
     */
    public function routeRequest()
    {
        add_filter('template_include', function() {
            ob_start();

            if (is_front_page()){
                $page = new HomeController;
            } else {
                $page = new NotFoundController;
            }

            $page->output();

            echo ob_get_clean();
            return false;
        });
    }
}
