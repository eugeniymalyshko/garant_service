<?php

namespace app\controllers;

use RedBeanPHP\R as R;

class AboutController extends AppController {

    public function indexAction() {
        $this->setMeta('Про компанію');
    }

}