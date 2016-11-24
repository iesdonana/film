<?php

namespace app\components;

use yii\base\Behavior;

class Saludable extends Behavior
{
    public $saludo;

    public function saludar()
    {
        echo 'Hola, ' . $this->saludo;
    }
}
