<?php

namespace app\controllers;

class ReportsController extends AppController {

    public function indexAction() {
    	$this->setMeta('Звітність');
        $reports20 = \R::getAll("SELECT reports.title, reports.link FROM reports WHERE year = 2020");
        $reports19 = \R::getAll("SELECT reports.title, reports.link FROM reports WHERE year = 2019");
        $this->set(compact('reports20', 'reports19'));
    }
}