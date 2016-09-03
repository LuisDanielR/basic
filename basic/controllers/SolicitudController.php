<?php

namespace app\controllers;
use app\models\Solicitud;
use Yii;
class SolicitudController extends \yii\web\Controller
{
     public function actionIndex() {
        $model = new Solicitud();   
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
