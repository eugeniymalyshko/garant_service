<?php

namespace app\models;

class Reports extends AppModel {

    public $attributes = [
        'name' => '',
        'phone' => '',
        'email' => '',
        'comment' => '',
        'checkbox' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['phone'],
            ['email'],
            ['comment'],
            ['checkbox'],
        ],
    ];

}