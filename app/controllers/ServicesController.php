<?php

namespace app\controllers;

use app\models\BreadCrumbs;

class ServicesController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $service_single = \R::findOne('service_single', "alias = ?", [$alias]);
        if(!$service_single) {
            throw new \Exception('Сторінку не знайдено', 404);
        }
        $this->setMeta($service_single->title, $service_single->description, $service_single->keywords);
        $this->set(compact('service_single'));
    }

}