<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\soporte\models\InvBajasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventario de Bajas';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<div class="inv-bajas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'progresivo',
            'id_tipo',
            'marca',
            'modelo',
            // 'serie',
            // 'estado_baja',
            // 'tipo_baja',
            // 'id_periodo',
            // 'id_plantel',
            // 'id_area',
            // 'id_piso',
            // 'fecha_baja',
            // 'observaciones',
            // 'dictamen',
            // 'bloq',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        <p>
        <?= Html::a('Crear Nueva Baja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
