<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Correo;
use yii\db\ActiveQuery;

 class UsuarioscorreoController extends Controller{

		public function actionIndex(){			
                        $model = Correo::find()->all(); //Busca todos los elementos de la tabla correo en la db
                        print_r($model);
			return $this->render('view-mostrar-registros',['model'=>$model]);                                                            
		}

}
?>