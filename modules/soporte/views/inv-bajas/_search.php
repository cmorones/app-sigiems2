<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\soporte\models\InvBajasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-bajas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'progresivo') ?>

    <?= $form->field($model, 'id_tipo') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'serie') ?>

    <?php // echo $form->field($model, 'estado_baja') ?>

    <?php // echo $form->field($model, 'tipo_baja') ?>

    <?php // echo $form->field($model, 'id_periodo') ?>

    <?php // echo $form->field($model, 'id_plantel') ?>

    <?php // echo $form->field($model, 'id_area') ?>

    <?php // echo $form->field($model, 'id_piso') ?>

    <?php // echo $form->field($model, 'fecha_baja') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'dictamen') ?>

    <?php // echo $form->field($model, 'bloq') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
