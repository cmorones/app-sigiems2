


<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CatAreasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cat Areas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-areas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cat Areas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_area',
            [
              'attribute'=>'id_plantel',
              'value' => 'catPlanteles.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\admin\models\CatPlanteles::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            'nombre',
            [
              'attribute'=>'id_dep',
              'value' => 'catDepen.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\admin\models\CatAreas::find()->orderBy('nombre')->asArray()->all(),'id_area','nombre')
            ],
            'nivel',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
