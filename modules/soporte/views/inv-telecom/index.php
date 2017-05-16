<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\soporte\models\InvTelecomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Telecoms';
$this->params['breadcrumbs'][] = $this->title;
?>

<br>
<br>
<br>
<br>
<div class="inv-equipos-index">

  

   <h3>Listado de Configuracion de Red</h3>
 
</div>
<div class="col-xs-12" style="padding-top: 10px;">
  <div class="box">
   <div class="box-body table-responsive">
     <div class="assignment-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
           // 'id_equipo',
              [
              'attribute'=>'id_equipo',
              'value' => 'progresivo.progresivo',
              
            ],
            'ip',
           // 'puerto_sw',
           // 'nodo',
            'mac',
            'proxy',
             [
              'attribute'=>'estado',
              'value' => 'estadoEquipo.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\soporte\models\EstadoEquipo::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            
           //'id_plantel',
            'observaciones',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

           
        ],
    ]); ?>
     </div>
   </div>
  </div>
</div>

