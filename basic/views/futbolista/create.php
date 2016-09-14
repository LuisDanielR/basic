<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Futbolista */

$this->title = 'Create Futbolista';
$this->params['breadcrumbs'][] = ['label' => 'Futbolistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="futbolista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
