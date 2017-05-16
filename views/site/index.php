<?php
/* @var $this yii\web\View */$this->title = 'APP-SISMA';
?>
                <div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-dashboard"></i> Dashboard |<small> Instituto de Educación Media Superior </small>        </h1>
        <ul class="breadcrumb"><li><a href="/"><i class="fa fa-home"></i>Dashboard</a></li>
<li class="active">Inicio</li>
</ul>    </section>
    <section class="content">
        
	<div class="callout callout-info show msg-of-day" >
	    <h4><i class="fa fa-bullhorn"></i> Mensaje del dia</h4>
	    <marquee onmouseout="this.setAttribute('scrollamount', 6, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" scrollamount="6" behavior="scroll" direction="left">Bienvenido al Sistema Integral de Gestion IEMS </marquee>
	</div>

<div class="row">
	<section class="col-lg-7">
		
<div class="nav-tabs-custom" id="notice-board">
    <ul class="nav nav-tabs pull-right flip">
        <li class="pull-left flip header">
            <i class="fa fa-inbox"></i>Pendientes</li>

                    <li class="pull-right flip">
                <a href="#parent-notice" data-toggle="tab">DIT</a>
            </li>
        
                    <li class="pull-right flip">
                <a href="#emp-notice" data-toggle="tab">SOPORTE</a>
            </li>
        
                    <li class="pull-right flip">
                <a href="#stu-notice" data-toggle="tab">TELECOM</a>
            </li>
        
        <li class="pull-right flip active">
            <a href="#nb-general" data-toggle="tab">SISTEMAS</a>
        </li>
    </ul>

    <div class="tab-content" id="notice-data">
        <div class="tab-pane active" id="nb-general">
                            <ul class="products-list product-list-in-box">
                                                <li class="item">
                                <div class="fa-stack fa-lg pull-left" aria-hidden="true">
                                    <i class="fa fa-circle fa-stack-2x img-circle bg-aqua"></i>
                                    <i class="fa fa-thumb-tack fa-rotate-270 fa-stack-1x text-aqua"></i>
                                </div>
                                <div class="product-info">
                                    <a class="product-title" href="/dashboard/notice/view-popup?id=4" data-target = "#globalModal" data-toggle = "modal">
                                    Listado de Bajas
                                         <?php

                                   //echo  @Yii::$app->user->identity->perfil;

                                         

                                    ?>                                    <span class="text-muted pull-right">
                                            <i class="fa fa-calendar"></i> September 22, 2016                                        </span>
                                    </a>
                                    <span class="product-description">
                                        Listado de # Equipos                                    </span>
                                </div>
                            </li>
                                                <li class="item">
                                <div class="fa-stack fa-lg pull-left" aria-hidden="true">
                                    <i class="fa fa-circle fa-stack-2x img-circle bg-aqua"></i>
                                    <i class="fa fa-thumb-tack fa-rotate-270 fa-stack-1x text-aqua"></i>
                                </div>
                                <div class="product-info">
                                    <a class="product-title" href="/dashboard/notice/view-popup?id=3" data-target = "#globalModal" data-toggle = "modal">
                                        Listado de # Equipos                                   <span class="text-muted pull-right">
                                            <i class="fa fa-calendar"></i> September 7, 2016                                        </span>
                                    </a>
                                    <span class="product-description">
                                        Sports Event in Next Week. Interested student complete registration process.                                     </span>
                                </div>
                            </li>
                                    </ul>
                    </div>

        <div class="tab-pane" id="stu-notice">
                            <div class="alert bg-warning text-warning">
                    No Notice....                </div>
                    </div>
                    <div class="tab-pane" id="emp-notice">
                                    <div class="alert bg-warning text-warning">
                        No Notice....                    </div>
                            </div>
        
                    <div class="tab-pane" id="parent-notice">
                                    <div class="alert bg-warning text-warning">
                        No Notice....                    </div>
                            </div>
            </div> <!--  /.tab-content -->
</div><!-- /.nav-tabs-custom -->

    		
<div class="box box-solid" id="full-calendar">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-calendar"></i> Calendar</h3>
        <div class="box-tools pull-right">
			<button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
			<button data-widget="remove" class="btn btn-box-tool"><i class="fa fa-times"></i></button>
		</div>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div id="w0" class="fullcalendar" data-plugin-name="fullCalendar">
<div class="fc-loading" style="display:none;">Loading ...</div>
</div>
    </div>
    <div class="overlay fc-loading" style ='display:none;'>
        <i class="fa fa-refresh fa-spin"></i>
    </div>
    <div class="box-footer">
        <div class="row">
            <ul class="legend col-sm-12 col-xs-12">
                                    <li>
                        <span style="background-color:#148f14;" ></span>
                        Orientation Program                    </li>
                            </ul>
        </div>
    </div><!-- /.box-footer -->
</div><!-- /.box -->
    </section><!-- /.Left col -->

    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
	

	<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-calendar-o"></i>Soporte</h3>
    </div>
    <div class="box-body box-comments dashBoardList" id="timetableList">
                    <div class='alert bg-warning text-warning'>
               <?php  
//echo json_encode(Yii::$app->user);
 //print_r(Yii::$app->user);

               ?>            </div>
                    </div><!---/. box-body--->
    <div class="box-footer text-center">
        <a class="small-box-footer pull-right btn-default btn-sm" href="/timetable/timetable-details/emp-daily-timetable?id=1" style="font-size:13px" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>    </div> <!-- /.box-footer -->
</div><!---/. box--->


<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-calendar-o"></i> Sistemas       </h3>
    </div>
    <div class="box-body box-comments dashBoardList" id="timetableList">
                    <div class='alert bg-warning text-warning'>
                No lecture for today.            </div>
                    </div><!---/. box-body--->
    <div class="box-footer text-center">
        <a class="small-box-footer pull-right btn-default btn-sm" href="/timetable/timetable-details/emp-daily-timetable?id=1" style="font-size:13px" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>    </div> <!-- /.box-footer -->
</div><!---/. box--->

<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-calendar-o"></i> Telecomunicaciones       </h3>
    </div>
    <div class="box-body box-comments dashBoardList" id="timetableList">
                    <div class='alert bg-warning text-warning'>
                No lecture for today.            </div>
                    </div><!---/. box-body--->
    <div class="box-footer text-center">
        <a class="small-box-footer pull-right btn-default btn-sm" href="/timetable/timetable-details/emp-daily-timetable?id=1" style="font-size:13px" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>    </div> <!-- /.box-footer -->
</div><!---/. box--->


	

    </section><!-- right col -->
</div><!-- /.row (main row) -->