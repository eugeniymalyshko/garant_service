<?php

namespace app\controllers;


class PlacesController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $place_single = \R::findOne('place_single', "alias = ?", [$alias]);
        if(!$place_single) {
            throw new \Exception('Странница не найдена', 404);
        }
        $this->setMeta($place_single->title, $place_single->description, $place_single->keywords);
        $this->set(compact('place_single'));
    }
    public function indexAction(){
    
    }
}