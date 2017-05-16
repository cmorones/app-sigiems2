<?php
use \app\assets_b\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\NotFoundHttpException;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

Yii::$app->name = "APP";


?>
<header class="main-header">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
                                               
<!--Start Mega menu block-->
<div class="es-megamenu esmenu pull-left">
    <div id="navbar-collapse" role="navigation" class="navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown esmenu-full">
                <a href="javascript:void(0)" data-target = "#megamenu-items" data-toggle="collapse" class="navbar-toggle">
                    <span class="fa fa-th-large fa-lg menu-icon"></span>
                </a>
                <ul class="dropdown-menu" id="megamenu-items">
                    <li>
                        <div class="esmenu-content">
                            <div class="tabbable row">
                                <div class="col-md-3">
                                    <ul class="nav nav-pills nav-stacked">



                                           <li>
                                            <a href="#academics"><i class="fa fa-calendar-o"></i> Direccion de Informática</a>
                                        </li>
                                      
                                  
                                      
                                    </ul>
                                </div><!-- end col -->
                                <div class="col-md-9 menu-sub-items">
                                    <div class="tab-content">




   <div id="academics" class="tab-pane">
        <div class="visible-sm visible-xs menu-box-header">
            <button aria-label="Close" class="close" type="button">
            <span aria-hidden="true">×</span>
            </button>
            <h4><i class="fa fa-calendar-o"></i> Academics</h4>
        </div>
        <div class="row">
            <!-- Menu Dirección de Informática y Telecomunicaciones --> 
            <?php  
              if(Yii::$app->user->can('menuAdmin')) {
            ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> DIT</a></li>
                        <li>
                            <?= Html::a('<i class="glyphicon glyphicon-calendar"></i> Dashboard',['/site'])?>
                        </li>
                        <li>
                            <?= Html::a('<i class="glyphicon glyphicon-calendar"></i> Información de Equipos',['/site/equipos'])?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
                }
            ?>

               <!-- Menu Soporte Técnico --> 
             <?php  
              if(Yii::$app->user->can('menuSoporte')) {
            ?>                                    
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> Soporte Técnico</a>
                        </li>
                         <?php  
                        if(Yii::$app->user->can('mesaAyuda')) {
                         ?>
                        
                        <?php
                       
                        if(Yii::$app->user->can('/soporte/inv-equipos/index')) {
                        ?>

                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Inventario de Equipos',['/soporte/inv-equipos/index']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Inventario de Bajas',['/soporte/inv-bajas/index']) ?>
                        </li>
                         <?php
                            }



                        }
                         
                        ?>


                    </ul>
                </div>
            </div>
              <?php
                }
            ?>

             <!-- Menu Soporte Técnico --> 
             <?php  
              if(Yii::$app->user->can('menuSoporte')) {
            ?>                                    
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> Telecomunicaciones</a>
                        </li>
                         <?php  
                        if(Yii::$app->user->can('mesaAyuda')) {
                                                    
                         if(Yii::$app->user->can('/soporte/inv-telecom/index')) {
                        ?>

                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Inventario de Telecom',['/soporte/inv-telecom/index']) ?>
                        </li>
                        <?php
                    }
                      if(Yii::$app->user->can('/soporte/inv-telecom/index')) {
                        ?>

                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Inventario de Telefonia',['/telefonia/telefonia']) ?>
                        </li>
                        <?php
                    }
                }
                        ?>

                    </ul>
                </div>
            </div>
              <?php
                }
            ?>

                 <!-- Menu Soporte Técnico --> 
             <?php  
              if(Yii::$app->user->can('menuReportes')) {
            ?>                                    
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> Reportes</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
              <?php
                }
            ?>
            <?php  
              if(Yii::$app->user->can('menuSistemas')) {
            ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="/timetable/default/index"><i class="fa fa-calendar-o"></i>Administración de Sistemas</a>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Catalogos',['/soporte/default/cat']) ?>
                        </li>

                    </ul>
                </div>
            </div>
            <?php
                }
            ?>
            <?php  
             if(Yii::$app->user->can('menuAdmin')) {
            ?>

            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-user-secret"></i> Administración del Sistema</a>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i>Assignment',['/rights/assignment/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Roles',['/rights/role/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Permisos',['/rights/permission']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Rutas',['/rights/route']) ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
               }
            ?>

            <?php  
              if(Yii::$app->user->can('menuTelecom')) {
            ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-list"></i> Telecomunicaciones</a>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-share-alt"></i> Telefonia',['/telefonia/telefonia/index']) ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            }
            ?>

        
        <?php  
              if(Yii::$app->user->can('menuAdmin')) {
            ?>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="menu-box">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Procesos Adicionales</a>
                    </li>
                    <li>
                        <a href="/configuration/system-setting"><i class="fa fa-cogs"></i> Cierre de módulos</a>
                    </li>
                    <li>
                        <a href="/notification/setting/conf"><i class="fa fa-bell-o"></i> Notificaciones</a>
                    </li>
                    <li>
                        <a href="/backup/default/index"><i class="fa fa-database"></i> Backup</a>
                    </li>
                    <li>
                        <a href="/login-details/index"><i class="fa fa-history"></i>Bitacora</a>
                    </li>
                </ul>
            </div>
        </div>
          <?php
            }
            ?>
                                                </div>
                                            </div><!--./tab-pane-->
                                                                        </div><!-- end col -->
                            </div><!-- /.tabbable -->
                        </div><!-- end esmenu-content -->
                    </li>
                </ul><!-- dropdown-menu -->
            </li><!-- end mega menu -->
        </ul><!--./navbar-nav-->
    </div><!--./navbar-collapse-->
</div><!--./esmenu-->
                            
            <div class="navbar-header pull-left">
                <a class="navbar-brand text-bold hidden-xs" href="/">Instituto de Eduación MediaSuperior del DF</a>                <a class="navbar-brand text-bold visible-xs" href="/">IEMS</a>            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">          

                   
                    <li class="dropdown user user-menu">

                                 <?= Html::a(
                            Yii::t('app', '<i class="md md-pages">('.@Yii::$app->user->identity->user_login_id.')</i>SALIR2'),
                            ['/site/logout']
                        ) ?>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li>
                                                        
                                    <?= Html::a('<i class="fa fa-user"></i>SALIR',['/site/logout']) ?>
                            </li>

                                                        <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                            <a class="btn btn-default btn-flat" href="/user/change" style="font-size:12px">Change Password</a>                              </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="/site/logout" data-method="post" style="font-size:12px">Sign out</a>                              </div>
                            </li>
                        </ul>
                    </li>
                                    </ul>
            </div><!--./navbar-custom-menu-->
        </div>
    </nav>
</header>

