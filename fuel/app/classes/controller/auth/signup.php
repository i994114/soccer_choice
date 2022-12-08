

<?php

class Controller_auth_Signup extends \Fuel\Core\Controller {
    public function action_index() {

        //変数としてビューを割り当てる
        $view = \Fuel\Core\View::forge('template/index');
        $view->set('head', \Fuel\Core\View::forge('template/head'));
        $view->set('header', \Fuel\Core\View::forge('template/header'));
        $view->set('footer', \Fuel\Core\View::forge('template/footer'));

        //レンダリングしたリクエストを返す
        return $view;
    }
}