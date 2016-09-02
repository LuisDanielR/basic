<?phpx

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class EmailController extends \yii\web\Controller
{
    public function actionIndex()
    {
   $model = new app\models\Email();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here            
            $model->save();
            return $this->render('index','model')=>$model,            
        }
    }

    return $this->render('index', [
        'model' => $model,
    ]); }
}
