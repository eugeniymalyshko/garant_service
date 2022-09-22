<?php

namespace app\models\admin;

use app\models\AppModel;

class Report extends AppModel {

    public $attributes = [
        'title' => '',
        'link' => '',
        'year' => '',
    ];

    public $rules = [
      'required' => [
         ['title'],
         ['link'],
         ['year'],
      ],
    ];
}