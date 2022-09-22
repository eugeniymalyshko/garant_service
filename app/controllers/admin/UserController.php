<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\User;

class UserController extends AppController {

    public function loginAdminAction(){

        if (!empty($_POST)){
            $user = new User();
            if (!$user->login(true)){
                $_SESSION['error'] = 'Логін, пароль ведено не вірно!';
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            }else{
                redirect();
            }
        }
        $this->layout = 'login';
        $this->setMeta('Авторизація адміна');
    }

    public function logoutAction(){
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();
    }
}