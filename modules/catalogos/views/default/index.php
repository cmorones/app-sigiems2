<?php 
use yii\helpers\Html; 
?>
                
                <div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-dashboard"></i> Dashboard |<small>Catalogos</small>        </h1>
        <ul class="breadcrumb"><li><a href="/"><i class="fa fa-home"></i>Home</a></li>
<li class="active">Catalogos</li>
</ul>    </section>
    <section class="content">
        
<div class="box box-solid">
    <div class="box-body">
        <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-aqua"><i class="fa fa-flag"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><?= Html::a('Periodo', ['/admin/cat-anos']);?></span>
                  <span class="edusec-link-box-number"><?= app\modules\admin\models\CatAnos::find()->count(); ?></span>
                    <span class="edusec-link-box-desc"></span>
                     <span class="edusec-link-box-bottom"><?= Html::a('<i class="fa fa-plus-square"></i> '. Yii::t('app', 'Agregar Nuevo'), ['/admin/cat-anos/create']); ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-aqua"><i class="fa fa-flag"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><?= Html::a('Planteles', ['/admin/cat-planteles']);?></span>
                  <span class="edusec-link-box-number"><?= app\modules\admin\models\CatPlanteles::find()->count(); ?></span>
                    <span class="edusec-link-box-desc"></span>
                     <span class="edusec-link-box-bottom"><?= Html::a('<i class="fa fa-plus-square"></i> '. Yii::t('app', 'Agregar Nuevo'), ['/admin/cat-planteles/create']); ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-aqua"><i class="fa fa-flag"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><?= Html::a('Areas', ['/admin/cat-areas']);?></span>
                  <span class="edusec-link-box-number"><?= app\modules\admin\models\CatAreas::find()->count(); ?></span>
                    <span class="edusec-link-box-desc"></span>
                     <span class="edusec-link-box-bottom"><?= Html::a('<i class="fa fa-plus-square"></i> '. Yii::t('app', 'Agregar Nuevo'), ['/admin/cat-areas/create']); ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
                     <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-aqua"><i class="fa fa-flag"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><?= Html::a('Usuarios', ['/admin/users']);?></span>
                  <span class="edusec-link-box-number"><?= app\modules\admin\models\Users::find()->count(); ?></span>
                    <span class="edusec-link-box-desc"></span>
                     <span class="edusec-link-box-bottom"><?= Html::a('<i class="fa fa-plus-square"></i> '. Yii::t('app', 'Agregar Nuevo'), ['/admin/users/create']); ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="edusec-link-box">
                    <span class="edusec-link-box-icon bg-aqua">
                        <i class="fa fa-university"></i>
                    </span>
                    <div class="edusec-link-box-content">
                        <span class="edusec-link-box-text">
                            <a href="/organization/view?id=1">Institute</a>                        </span>
                        <span class="edusec-link-box-desc">
                            Manage Institute Setup                        </span>
                        <span class="edusec-link-box-bottom">
                            <a href="/organization/update?id=1"><i class="fa fa-edit"></i> Edit</a>                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="edusec-link-box">
                    <span class="edusec-link-box-icon bg-aqua">
                        <i class="fa fa-language"></i>
                    </span>
                    <div class="edusec-link-box-content">
                        <span class="edusec-link-box-text">
                            <a href="/languages/index">Languages</a>                        </span>
                        <span class="edusec-link-box-number">4</span>
                        <span class="edusec-link-box-desc"></span>
                        <span class="edusec-link-box-bottom">
                            <a href="/languages/create"><i class="fa fa-plus-square"></i> Create New</a>                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="edusec-link-box">
                    <span class="edusec-link-box-icon bg-aqua">
                        <i class="fa fa-flag-checkered"></i>
                    </span>
                    <div class="edusec-link-box-content">
                        <span class="edusec-link-box-text">
                            <a href="/nationality/index">Nationality</a></span>
                        <span class="edusec-link-box-number">3</span>
                        <span class="edusec-link-box-desc"></span>
                        <span class="edusec-link-box-bottom">
                            <a href="/nationality/create"><i class="fa fa-plus-square"></i> Create New</a>                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
</div>

