<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $persona app\models\Persona */
?>
<h1>Hola <?= Html::encode($persona->nombre) ?>
    <?= Html::encode($persona->apellidos) ?></h1>
<p>Encantado de saludarte</p>
