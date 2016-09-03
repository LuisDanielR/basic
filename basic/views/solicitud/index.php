
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Email */
/* @var $form ActiveForm */
?>
<div class="index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'folio') ?>
        <?= $form->field($model, 'solicitante') ?>
        <?= $form->field($model, 'tipo') ?>
        <?= $form->field($model, 'texto') ?>            
        <div class="form-group">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- index -->