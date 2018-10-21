<?php

namespace MWW\Pages;

use MWW\Pages\Abstracts\PagesController;

class HomeController extends PagesController {

    public function output() {
        $this->template->include('partials.header');
        $this->template->include('pages.home');
        $this->template->include('partials.footer');
    }

}
