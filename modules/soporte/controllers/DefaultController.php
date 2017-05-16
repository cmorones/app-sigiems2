<?php
namespace app\modules\soporte\controllers;
 use app\modules\soporte\models\InvEquipos;
 use app\modules\admin\models\CatPlanteles;



use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Default controller for the `soporte` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

       public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
               // 'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        

       // $cuentaPlanteles = CatModelo::find()->where(['id'=>$id])->count();
        //$planteles = CatPlanteles::find()->where(['id'=>$id])->all();
        $planteles = CatPlanteles::find()->all();

       /* if ($cuentaModelos > 0) {
            
        }else{
            echo "<option>-</option>";
        }*/


        return $this->render('index', [
            'planteles' => $planteles,
            ]);
    }

     public function actionCat()
    {
        return $this->render('cat');
    }
}
