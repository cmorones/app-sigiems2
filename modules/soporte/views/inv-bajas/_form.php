<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\telefonia\models\CatMarca;
use app\modules\telefonia\models\CatModelo;
use app\modules\admin\models\CatPlanteles;
use app\modules\admin\models\CatAreas;
use app\modules\admin\models\CatPiso;
use app\modules\admin\models\CatAnos;
use app\modules\admin\models\CatEstadoBajas;


/* @var $this yii\web\View */
/* @var $model app\modules\soporte\models\InvBajas */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 
$fecha = date("d-m-Y");
?>

<div class="inv-bajas-form">

<div class="<?php echo $model->isNewRecord ? 'box-success' : 'box-info'; ?> box view-item col-xs-12 col-lg-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"></h3>
  </div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
    <div class="col-xs-4 edusecArLangHide"></div>
    <div class="col-xs-4 edusecArLangHide"></div>
    <div class="col-xs-4 left-padding">
    <?= Html::a(Yii::t('app', 'Regresar'), ['view', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
</div>
<?

?>
    <?php $form = ActiveForm::begin(); ?>
      <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                     
                            <div class="panel-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate">

               <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Progresivo:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'progresivo', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Progresivo'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>
                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Tipo:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'id_tipo', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Tipo'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>
<div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Marca:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'marca', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Marca'] ] )->dropDownList(ArrayHelper::map(CatMarca::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),
                                                 [
                                                    'prompt'=>Yii::t('app', '--- Selecciona Marca ---'),
                                                   'onchange'=>'
                                                        $.post( "'.Yii::$app->urlManager->createUrl('soporte/inv-bajas/modelos?id=').'"+$(this).val(), function( data ) {
                                                          $( "select#invbajas-modelo" ).html( data );
                                                        });



                                                    '])->label(false); ?>
                                            </div>
                                        </div>

                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Modelo:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'modelo', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Modelo'] ] )->dropDownList(ArrayHelper::map(CatModelo::find()->orderBy(['id'=>SORT_ASC])->all(),'id','modelo'),['prompt'=>Yii::t('app', '--- Selecciona modelo ---')])->label(false); ?>
                                            </div>
                                        </div>

                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Serie:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'serie', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Serie'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>


                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Estado de la baja:</label>
                                            <div class="col-lg-4">
                                              

                                            <?= $form->field($model, 'estado_baja', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatEstadoBajas::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona un Estado'])->label(false); ?>
                                            </div>
                                        </div>




                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Tipo de Baja:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'tipo_baja', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Tipo de Baja'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>

                <div class="form-group">
                                          
                                        
                                             <label for="cname" class="control-label col-lg-2">Periodo:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'id_periodo', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatAnos::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona un Periodo'])->label(false); ?>
                                            </div>
                                        </div>
                                        
                <div class="form-group">
                                          
                                        
                                             <label for="cname" class="control-label col-lg-2">Plantel:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'id_plantel', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPlanteles::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona un Plantel'])->label(false); ?>
                                            </div>
                                        </div>


                                        
                <div class="form-group">
                                          
                                        
                                             <label for="cname" class="control-label col-lg-2">Area:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'id_area', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatAreas::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona una Area'])->label(false); ?>
                                            </div>
                                        </div>
                                        
                <div class="form-group">
                                          
                                        
                                             <label for="cname" class="control-label col-lg-2">Piso:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'id_piso', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPiso::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona un piso'])->label(false); ?>
                                            </div>
                                        </div>
                                        
                                        
                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Dictamen:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'dictamen', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Dictamen'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>

                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Certificado:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'certificado', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Certificado'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div>                           

                                <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Bloq:</label>
                                            <div class="col-lg-4">
                                              

                                             <?= $form->field($model, 'bloq', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Bloq'] ] )->textInput(['maxlength' => 35])->label(false); ?>
                                            </div>
                                        </div> 
                                          <div class="form-group">
                                          <label for="cname" class="control-label col-lg-2">Fecha de la Baja:</label>
                                            <div class="col-lg-4">
                                              

                                                    <?= $form->field($model, 'fecha_baja')->textInput(['readonly' => true, 'value' => $fecha])->label(false); ?>
                                                
                                            </div>
                                        </div> 

                                                          <div class="form-group">
                                            <label for="ccomment" class="control-label col-lg-2">Observaciones:</label>
                                            <div class="col-lg-5">
                                                <?= $form->field($model, 'observaciones', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'Observaciones'] ] )->textArea(['class'=>'form-control','rows' => '6'])->label(false); ?>
                                            </div>
                                        </div>
                                        
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                             
                                            </div>                                                                                                                                                                                                  

    <?//= $form->field($model, 'progresivo')->textInput() ?>

    <?//= $form->field($model, 'id_tipo')->textInput() ?>

    <?//= $form->field($model, 'marca')->textInput() ?>

    <?//= $form->field($model, 'modelo')->textInput() ?>

    <?//= $form->field($model, 'serie')->textInput() ?>

    <?//= $form->field($model, 'estado_baja')->textInput() ?>

    <?//= $form->field($model, 'tipo_baja')->textInput() ?>

    <?//= $form->field($model, 'id_periodo')->textInput() ?>

    <?//= $form->field($model, 'id_plantel')->textInput() ?>

    <?//= $form->field($model, 'id_area')->textInput() ?>

    <?//= $form->field($model, 'id_piso')->textInput() ?>

    <?//= $form->field($model, 'fecha_baja')->textInput() ?>

    <?//= $form->field($model, 'observaciones')->textInput() ?>

    <?//= $form->field($model, 'dictamen')->textInput() ?>

    <?//= $form->field($model, 'bloq')->textInput() ?>

    <?//= $form->field($model, 'created_at')->textInput() ?>

    <?//= $form->field($model, 'created_by')->textInput() ?>

    <?//= $form->field($model, 'updated_at')->textInput() ?>

    <?//= $form->field($model, 'updated_by')->textInput() ?>

</form>
</div>


    <?php ActiveForm::end(); ?>


</div>
 
</div>

</div>

</div>


