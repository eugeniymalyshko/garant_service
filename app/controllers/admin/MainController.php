<?php

namespace app\controllers\admin;

class MainController extends AppController{

    public function indexAction(){
        $countNewTestimonials = \R::count('testimonials', "status = '0'");
        $countReports = \R::count('reports');
        $this->setMeta('Панель керування');
        $this->set(compact('countReports', 'countNewTestimonials'));
    }
}