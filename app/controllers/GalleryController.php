<?php

namespace app\controllers;

use garant\libs\Pagination;

class GalleryController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 18;
        $count = \R::count('gallery');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $gallery = \R::getAll("SELECT gallery.id, gallery.img FROM gallery ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Галерея');
        $this->set(compact('gallery', 'pagination', 'count'));
    }
}

