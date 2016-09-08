<?php

namespace app\controllers;
use app\models\Email;
use Yii;

class EmailController extends \yii\web\Controller {

    public function actionIndex() {
        $model = new Email();   
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
