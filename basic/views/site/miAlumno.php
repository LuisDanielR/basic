<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<div class="jumbotron">
	<h1>
		Captura de Alumno
	</h1>
</div>

<?php
	if(Yii::$app->session->hasFlash('success')){
		echo Yii::$app->session->getFlash('success');
	}
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'nombre'); ?>
<?= $form->field($model,'control'); ?>
<?= $form->field($model,'telefono'); ?>
<?= $form->field($model,'correo'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>

<?php $form = ActiveForm::end(); ?>