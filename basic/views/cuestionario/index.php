
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Email */
/* @var $form ActiveForm */
?>
<div class="index">

    <?php $form = ActiveForm::begin(); ?>
        <h3>¿Como te llamas?</h3>
        <?= $form->field($model, 'respuesta1') ?>
        <h3>¿Cual es tu edad?</h3>
        <?= $form->field($model, 'respuesta2') ?>
        <h3>¿Cual es tu especialidad?</h3>
        <?= $form->field($model, 'respuesta3') ?>
        <h3>¿Te gusta la pizza?</h3>
        <?= $form->field($model, 'respuesta4') ?>
        <h3>¿Terminaste el servicio social?</h3>
        <?= $form->field($model, 'respuesta5') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- index -->