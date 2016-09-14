<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Futbolista */

$this->title = $model->id_futbolista;
$this->params['breadcrumbs'][] = ['label' => 'Futbolistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="futbolista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_futbolista], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_futbolista], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_futbolista',
            'nombre_futbolista',
            'edad',
            'fk_id_equipo',
        ],
    ]) ?>

</div>
