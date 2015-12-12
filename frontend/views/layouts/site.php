<?php
use yii\helpers\Html;
use \frontend\assets\SiteAsset;

/* @var $this yii\web\View */
/* @var $content string */
SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <header>
        <div id="logo">
            <h1><a href="#">Site creation </a></h1>
        </div>
    </header>
    <div id="wrapper">
        <?= $content ?>
        <footer> <p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p> </footer>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>