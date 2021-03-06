<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Autor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'attribute'=>'fk_id_libro',
               'value'=>'fkIdLibro.nombre_libro'
            ],
            //'id_autor',
            'nombre_autor',
            //'edad',
            //'fk_id_libro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
