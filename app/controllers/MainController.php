<?php

namespace app\controllers;

use garant\App;
use garant\base\View;
use garant\Cache;

class MainController extends AppController {

    public function indexAction() {
        $testimonials = \R::findAll('testimonials');
        $places = \R::find('places', 'LIMIT 4');
        $services = \R::find('services', 'LIMIT 6');
        $this->setMeta(App::$app->getProperty('site_name'), 'Кейтеринг в Києві - широкий спектр послуг. Оганізація і проведення кава-брейку, фуршету, банкету, 
            весілля як на нашій локації так і на виїзді. Оригінальні ідеї, високоякісний сервіс, 20 років досвіду. 
            Кейтеринг в Киеве - широкий спектр услуг. Организация и проведение кофе-брейка, фуршета, банкета, свадьбы как на нашей локации так и на выезде. Креативные решения, 
            обслуживание на высшем уровне, 20 лет опыта.',
            'кейтеринг в києві, кейтеринг київ, кейтеринг в киеве, кейтеринг, кейтеринг киев, кейтеринг в Украине, кейтеринг Украина, кейтеринговая компания, Кейтерингова компанія, фуршет, банкет, коктейль, 
                кофе-брейк, свадьба, барбекю, Киев кейтеринг');
        $this->set(compact('services', 'places', 'testimonials'));
    }
}
