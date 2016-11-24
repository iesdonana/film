<?php

namespace app\components;

use yii\base\Component;
use app\components\Saludable;

class Saludador extends Component
{
    public function behaviors()
    {
        return [
            Saludable::className(),
        ];
    }
}
