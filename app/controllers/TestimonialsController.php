<?php

namespace app\controllers;

use app\models\Testimonial;
use garant\libs\Pagination;

class TestimonialsController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 4;
        $count = \R::count('testimonials');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $testimonials = \R::findAll('testimonials', "status = '1' ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Відгуки');
        $this->set(compact('testimonials', 'pagination', 'count'));
    }

    public function addAction(){
        if (!empty($_POST)) {
            $testimonial = new Testimonial();
            $data = $_POST;
            $testimonial->load($data);

            if (!$testimonial->validate($data)) {
                $testimonial->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($id = $testimonial->save('testimonials'));
            redirect();
        }
    }
}