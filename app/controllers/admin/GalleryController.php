<?php

namespace app\controllers\admin;

use app\models\admin\Gallery;
use garant\App;
use garant\libs\Pagination;

class GalleryController extends AppController {

    public function indexAction(){
        $countImages = \R::count('images');
        $this->setMeta('Галерея');
        $this->set(compact('countImages'));
    }

    public function addAction() {
        $gallery = new Gallery();
        $gallery->saveGallery();
        $this->setMeta('Нове зображення');
    }
    public function addImageAction() {
        if (isset($_GET['upload'])) {
            if ($_POST['name'] == 'main') {
                $wmax = App::$app->getProperty('gallery_width');
                $hmax = App::$app->getProperty('gallery_height');
            }
            $name = $_POST['name'];
            $galleryImage = new Gallery();
            $galleryImage->uploadImg($name, $wmax, $hmax);
        }
    }

    public function viewAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 18;
        $count = \R::count('gallery');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $gallery = \R::getAll("SELECT id, img, gallery_id FROM gallery ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Галерея');
        $this->set(compact('gallery', 'pagination', 'count'));
    }

    public function deleteAction(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if (!$id || !$src) {
            return;
        }
        if(\R::exec("DELETE FROM gallery WHERE id = ? AND img = ?", [$id, $src])) {
            unlink(WWW . "/images/gallery/1/$src");
            exit('1');
        }
        return;

    }
}