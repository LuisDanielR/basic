<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

/**
 * Description of CountryController
 *
 * @author Luis Daniel
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use app\models\Country;

class CountryController extends Controller {

    //put your code here
    public function actionIndex() {
        $query = Country::find();
        $pagination = new Pagination(['defaultPageSize' => 5, 'totalCount' =>
            $query->count(),]);
        $countries = $query->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        return $this->render('view-mostrar-reg-country', ['countries' => $countries,
                    'pagination' => $pagination,]);
    }
}
