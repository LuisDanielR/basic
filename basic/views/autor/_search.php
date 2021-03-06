<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AutorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_autor') ?>

    <?= $form->field($model, 'nombre_autor') ?>

    <?= $form->field($model, 'edad') ?>

    <?= $form->field($model, 'fk_id_libro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
