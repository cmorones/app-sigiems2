<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\soporte\models\TipoEquipo;
use app\modules\soporte\models\CatMarca;
use app\modules\soporte\models\CatModelo;


/* @var $this yii\web\View */
/* @var $searchModel app\modules\soporte\models\InvEquiposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Equipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<br>
<div class="inv-impresoras-index">

  

    <p>
        <?= Html::a('Agregar Impresoras', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 
</div>

<div class="col-xs-12" style="padding-top: 10px;">
  <div class="box">
   <div class="box-body table-responsive">
     <div class="assignment-index">
        <?php
        
    Pjax::begin([
        'enablePushState'=>false,
    ]);
  echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'progresivo',
           // 'id_tipo',
            [
              'attribute'=>'marca',
              'value' => 'catMarca.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\CatMarca::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            [
              'attribute'=>'modelo',
              'value' => 'catModelo.modelo',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\CatModelo::find()->orderBy('modelo')->asArray()->all(),'id','modelo')
            ],
            'serie',
            [
              'attribute'=>'estado',
              'value' => 'estadoEquipo.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\EstadoEquipo::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
             // 'id_plantel',
             [
              'attribute'=>'id_area',
              'value' => 'catArea.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\CatAreas::find()->orderBy('nombre')->asArray()->all(),'id_area','nombre')
            ],
             [
              'attribute'=>'id_piso',
              'value' => 'catPiso.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\CatPiso::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
             [
              'attribute'=>'clasif',
              'value' => 'catAntiguedad.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\CatAntiguedad::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            // 'observaciones',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    Pjax::end();
    ?>
     </div>
   </div>
  </div>
</div>

