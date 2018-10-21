<?php

namespace MWW\Pages;

use MWW\Pages\Abstracts\PagesController;

class NotFoundController extends PagesController {

    public function output() {
        $this->template->include('partials.header');
        $this->template->include('pages.404');
        $this->template->include('partials.footer');
    }

}
