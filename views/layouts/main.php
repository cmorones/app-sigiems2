<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'login-layout',
        ['content' => $content]
    );
} else {
    \app\assets_b\AppAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@bower') . '/moltran';
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

       <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.0/fullcalendar.min.css" rel="stylesheet">
<style>
            #full-calendar .popover {
                max-width:400px;
                width:400px;
            }
            #full-calendar .popover-content {
                padding: 0px;
            }
        </style>
<style>
    #bd-list .product-img img {
        height: 44px;
        width: 45px;
    }
</style> 
        <!-- Render this(ar-layout-css) file for supporting Arabic Language -->
       
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    
       <body class="layout-top-nav skin-blue-light">
    <div class="wrapper">
    <?php $this->beginBody() ?>

    <?= $this->render(
        'header.php',
        ['directoryAsset' => $directoryAsset]
    ) ?>

 
              <?= $this->render(
                    'content.php',
                    ['content' => $content, 'directoryAsset' => $directoryAsset]
                ) ?>
        
         </div>



      
    <?php $this->endBody() ?>
    </body>
      <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
