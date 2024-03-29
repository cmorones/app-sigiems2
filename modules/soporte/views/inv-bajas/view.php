<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\soporte\models\InvBajas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Bajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-bajas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'estado_baja',
            'tipo_baja',
            'id_periodo',
            'id_plantel',
            'id_area',
            'id_piso',
            'fecha_baja',
            'observaciones',
            'dictamen',
            'bloq',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
