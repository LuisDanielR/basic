<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutomovilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Automovils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automovil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Automovil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [ 'attribute'=>'matricula_idmatricula',
                'value'=>'matriculaIdmatricula.idmatricula'],
            'id',
            'nombre',
            'modelo',
            'marca',           
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
