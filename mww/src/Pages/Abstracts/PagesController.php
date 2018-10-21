<?php

namespace MWW\Pages\Abstracts;

use MWW\Frontend\Template;

abstract class PagesController {

    /**
     * Template class instance
     */
    protected $template;

    public function __construct() {
        $this->template = new Template;
    }

    /**
     * Returns the page template
     */
    abstract public function output();
}
