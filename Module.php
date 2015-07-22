<?php

namespace romaten1\books\books;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'romaten1\books\controllers';

    public $layout = 'main.php';

    public function init()
    {
        parent::init();
    }
}
