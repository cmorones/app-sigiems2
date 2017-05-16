<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\telefonia\models\TelefoniaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventario de Telefonias';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<div class="inv-telefonia-index">
<div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h1 class="box-title"><i class="fa fa-list"></i> <?php echo $this->title ?></h1></div>
</div>

      <div class="box view-item col-xs-12 col-lg-12">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'progresivo',
            'serie',
            'marca',
             'modelo',
             'num_ext',
             'id_usuario',
             'estado',
             'id_plantel',
             'id_area',

                [
             'class' => 'app\components\CustomActionColumn',
      'template' => '{update} {delete}',
      'buttons' => [
        'update' => function ($url, $model) {
                return (Html::a('<span class="glyphicon glyphicon-search"></span>', $url, ['title' => Yii::t('app', 'update'),]));
            },
        'delete' => function ($url, $model) {
                return ((Yii::$app->user->can("/telefonia/telefonia/delete")) ? Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, ['title' => Yii::t('app', 'Delete'), 'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),'method' => 'post'],]) : '');
            }
      ],
            ],
        ],
    ]); ?>
    <p>
        <?= Html::a('Agregar telefonia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
