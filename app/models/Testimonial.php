<?php

namespace app\models;

class Testimonial extends AppModel {
    public $attributes = [
        'name' => '',
        'email' => '',
        'comment' => '',
        'company' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['email'],
            ['comment'],
        ],
    ];
}