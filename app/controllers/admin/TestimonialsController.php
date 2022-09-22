<?php
namespace app\controllers\admin;

use garant\libs\Pagination;
use mysql_xdevapi\Exception;

class TestimonialsController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('testimonials');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $testimonials = \R::getAll("SELECT testimonials.* FROM testimonials LIMIT $start, $perpage");
        $this->setMeta('Відгуки');
        $this->set(compact('testimonials', 'pagination', 'count'));
    }
    
    public function viewAction(){
        \R::fancyDebug( false );
        $testimonial_id = $this->getRequestID();
        $testimonial = \R::getRow("SELECT testimonials.* FROM br396286_db.testimonials WHERE br396286_db.testimonials.id = ? LIMIT 1", [$testimonial_id]);
        if (!$testimonial){
            throw new \Exception('Сторінку не знайдено', 404);
        }
        $this->setMeta("Відгук № {$testimonial_id}");
        $this->set(compact('testimonial'));
    }

    public function changeAction(){
        $testimonial_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $testimonial = \R::load('testimonials', $testimonial_id);
        if(!$testimonial){
            throw new Exception('Сторинку не знайдено!', 404);
        }
        $testimonial->status = $status;
        \R::store($testimonial);
        redirect();
    }
    public function deleteAction(){
        $testimonial_id = $this->getRequestID();
        $testimonial = \R::load('testimonials', $testimonial_id);
        \R::trash($testimonial);
        $_SESSION['success'] = 'Відгук видалено успішно!';
        redirect(ADMIN . '/testimonials');
    }
}