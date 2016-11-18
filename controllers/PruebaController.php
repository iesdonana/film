<?php

namespace app\controllers;

use app\models\Persona;

class PruebaController extends \yii\web\Controller
{
    /**
     * Saluda a una persona.
     * @param string $nombre El nombre de la persona
     * @param string $apellidos Los apellidos de la persona
     * @return string El cuerpo del resultado
     */
    public function actionIndex($nombre = '', $apellidos = '')
    {
        $persona = new Persona($nombre, $apellidos);

        return $this->render('index', [
            'persona' => $persona,
        ]);
    }
}
