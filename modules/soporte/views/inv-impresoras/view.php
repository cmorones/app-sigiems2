<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\soporte\models\InvImpresoras */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Impresoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<div class="col-xs-12" style="padding-top: 10px;">
  <div class="box">
   <div class="box-body table-responsive">
     <div class="assignment-index">
    <p>
         <?= Html::a('Regresar', ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro de Eliminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'progresivo',
            'id_tipo',
            'marca',
            'modelo',
            'serie',
            'estado',
            'id_plantel',
            'id_area',
            'id_piso',
            'clasif',
            'observaciones',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>
   
     </div>
   </div>
  </div>
</div>

