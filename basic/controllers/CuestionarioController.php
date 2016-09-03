<?php

namespace app\controllers;
use Yii;
class CuestionarioController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $model = new \app\models\Cuestionario();   
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->render('index', [
                    'model' => $model,
             ]);
        } else{
         return $this->render('index', [
                    'model' => $model,
             ]);
        }
    }

}
