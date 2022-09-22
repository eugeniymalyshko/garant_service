<?php

namespace app\controllers\admin;

use app\models\admin\Report;
use garant\libs\Pagination;

class ReportsController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('reports');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $reports = \R::getAll("SELECT reports.* FROM reports LIMIT $start, $perpage");
        $this->setMeta('Перелік звітів');
        $this->set(compact('reports', 'pagination', 'count'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        $report = \R::load('reports', $id);
        \R::trash($report);
        $_SESSION['success'] = 'Звіт видалено успішно!';
        redirect();
    }

    public function addAction(){
        if (!empty($_POST)){
            $report = new Report();
            $data = $_POST;
            $report->load($data);

            if (!$report->validate($data)) {
                $report->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
                }

            if ($id = $report->save('reports')){
                $_SESSION['success'] = 'Звіт успішно додано';
            }
            redirect();
        }
        $this->setMeta('Новий звіт');
    }
}