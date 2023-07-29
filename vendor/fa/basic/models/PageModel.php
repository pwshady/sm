<?php

namespace fa\basic\models;

use fa\App;

class PageModel extends Model
{
    public function __construct(public $dir){}

    public function run()
    {
        self::setAccess();
        self::setErrors();
        self::setSettings();
        self::setLabels(); //Peredelat
        self::setModules();
        self::setWidgets();
    }

    public function setLabels()
    {
        if (file_exists(ROOT . $this->dir . 'labels.json')) {            
            $labels = json_decode(file_get_contents(ROOT . $this->dir . 'labels.json'), true);
            if (is_array($labels)) {
                $language = App::$app->getLanguage()['code'];
                if (array_key_exists($language, $labels)) {
                    $labels = $labels[$language];
                    foreach ($labels as $key => $value) {
                        App::$app->setLabel($key, $value);
                    }
                }
            }
        }
    }

}
