<?php

namespace app\controllers;


class SenderController extends AppController {

    public function mailAction() {
        $this->layout = 'sender';
    }

}