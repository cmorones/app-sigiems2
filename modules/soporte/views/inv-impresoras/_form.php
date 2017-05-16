<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\soporte\models\CatAntiguedad;
use app\modules\soporte\models\EstadoEquipo;
use app\modules\soporte\models\TipoEquipo;

/* @var $this yii\web\View */
/* @var $model app\modules\soporte\models\InvEquipos */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<br>
<br>
<br>
<div class="inv-equipos-form">

<div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"></h3>
  </div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
    <div class="col-xs-4 edusecArLangHide"></div>
    <div class="col-xs-4 edusecArLangHide"></div>
    <div class="col-xs-4 left-padding">
    <?= Html::a(Yii::t('app', 'Regresar'), ['index', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
</div>

    <?php $form = ActiveForm::begin(); ?>
      <div class="row">
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Agregar/modificar Impresoras</h3></div>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Progresivo</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'progresivo', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Progresivo'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>



                                             <div class="form-group">
                                            <label for="curl" class="control-label col-lg-2">Marca</label>
                                            <div class="col-lg-4">
                                                 <?= $form->field($model, 'marca', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'tipo'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\CatMarca::find()->where(['tipo'=>2])->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),
                                                 [
                                                    'prompt'=>Yii::t('app', '--- Selecciona Marca ---'),
                                                   'onchange'=>'
                                                        $.post( "'.Yii::$app->urlManager->createUrl('soporte/inv-impresoras/modelos?id=').'"+$(this).val(), function( data ) {
                                                          $( "select#invimpresoras-modelo" ).html( data );
                                                        });



                                                    '])->label(false); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Modelo</label>
                                            <div class="col-lg-4">
                                                 <?= $form->field($model, 'modelo', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'modelo'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\CatModelo::find()->orderBy(['id'=>SORT_ASC])->all(),'id','modelo'),['prompt'=>Yii::t('app', '--- Selecciona modelo ---')])->label(false); ?>
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Serie</label>
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'serie', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Serie'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Estado</label>
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'estado', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'estado'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\EstadoEquipo::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),['prompt'=>Yii::t('app', '--- Selecciona estado ---')])->label(false); ?>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Area</label>
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'id_area', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Area'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\CatAreas::find()->orderBy(['id_area'=>SORT_ASC])->all(),'id_area','nombre'),['prompt'=>Yii::t('app', '--- Selecciona antiguedad ---')])->label(false); ?>

                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Ubicacion</label>
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'id_piso', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Piso'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\CatPiso::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),['prompt'=>Yii::t('app', '--- Selecciona antiguedad ---')])->label(false); ?>

                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Antiguedad</label>
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'clasif', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'clasif'] ] )->dropDownList(ArrayHelper::map(app\modules\soporte\models\CatAntiguedad::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),['prompt'=>Yii::t('app', '--- Selecciona antiguedad ---')])->label(false); ?>

                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Observaciones</label>
                                            <div class="col-lg-5">
                                                <?= $form->field($model, 'observaciones', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Observaciones'] ] )->textArea(['class'=>'form-control','rows' => '6'])->label(false); ?>
                                            </div>
                                        </div>




                                           
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->
                                    <?php ActiveForm::end(); ?>

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->


  

</div>



