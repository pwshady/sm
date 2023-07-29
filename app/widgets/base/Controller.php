<?php

namespace app\widgets\languageselector;

use fa\basic\controllers\WidgetController;

use fa\App;

class Controller extends WidgetController
{

    private array $languages = [];


    public function run()
    {
        parent::run();
        self::job();
    }

    private function job()
    {
        
    }

    public function render()
    {
        parent::render();
    }
}