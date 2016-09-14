<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FutbolistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Futbolistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="futbolista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Futbolista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_futbolista',
            'nombre_futbolista',
            'edad',
            'id_equipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
