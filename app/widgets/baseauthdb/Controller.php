<?php

namespace app\widgets\baseauthdb;

use fa\basic\controllers\WidgetController;

use fa\App;

class Controller extends WidgetController
{

    public function run()
    {
        parent::run();
        self::job();
    }

    private function job()
    {
        //debug($this->configs);
        //$_SESSION['user_roles'] = ['user'];
        //debug(App::$app->getRequest());
        //debug($access = App::$app->getAccess());
        //debug($_SESSION['user_roles']);
        //$db = App::$app->getModul($this->configs['modul_db_name']);
        //debug($db);
        $request = App::$app->getRequest();
        switch (App::$app->getRequest()) {
            case $this->configs['register_request']:
                self::register();
                break;
            default:
                self::login();
        }
    }

    private function register()
    {
        echo 'register';
    }

    private function login()
    {
        echo 'login';
    }

    public function render()
    {
        $widget = App::$app->getWidget($this->widget_name);
        switch (App::$app->getRequest()) {
            case $this->configs['register_request']:
                $view_path = WIDGET . '/' . $this->widget_name . '/registerView.php';
                break;
            default:
                $view_path = WIDGET . '/' . $this->widget_name . '/loginView.php';
        }
        ob_start();
        require_once $view_path;
        $widget['code'] = ob_get_clean();
        $widget['complete'] = 1;
        App::$app->updateWidget($widget);
    }
}