<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fichas */

$this->title = 'Create Fichas';
$this->params['breadcrumbs'][] = ['label' => 'Fichas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fichas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
