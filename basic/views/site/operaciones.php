<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<div class="jumbotron">
	<h1>
		Captura de numeros para sumar
	</h1>
</div>

<?php
	if(Yii::$app->session->hasFlash('success')){
		echo Yii::$app->session->getFlash('success');
	}
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'numero1'); ?>
<?= $form->field($model,'numero2'); ?>
<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>

<?php $form = ActiveForm::end(); ?>