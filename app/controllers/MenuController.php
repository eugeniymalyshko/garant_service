<?php

namespace app\controllers;

class MenuController extends AppController {

    public function indexAction() {
        $coffee_break_1 = \R::findAll('coffee_break_1');
        $coffee_break_2 = \R::findAll('coffee_break_2');
        $stand_up_1 = \R::findAll('stand_up_1');
        $stand_up_2 = \R::findAll('stand_up_2');
        $banquet_1 = \R::findAll('banquet_1');
        $banquet_2 = \R::findAll('banquet_2');
        $this->setMeta('Меню');
        $this->set(compact('coffee_break_1', 'coffee_break_2', 'stand_up_1', 'stand_up_2', 'banquet_1', 'banquet_2'));
    }

}