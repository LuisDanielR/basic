<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Automovil */

$this->title = 'Create Automovil';
$this->params['breadcrumbs'][] = ['label' => 'Automovils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automovil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
