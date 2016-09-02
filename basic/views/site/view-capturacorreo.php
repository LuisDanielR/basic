<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<div class="jumbotron">
	<h1>
		Datos del correo
	</h1>
</div>

<?php
	if(Yii::$app->session->hasFlash('success')){
		echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'nombre'); ?>
<?= $form->field($model,'email'); ?>
<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>
