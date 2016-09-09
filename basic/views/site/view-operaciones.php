<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<div class="jumbotron">
	<h1>
		Captura de numeros para sumar
	</h1>
</div>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'numero1'); ?>
<?= $form->field($model,'numero2'); ?>
<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>

<h1><?= Html::encode($model->suma()); ?><h1>