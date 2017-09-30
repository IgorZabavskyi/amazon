<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
//Yii::$app->homeUrl .= 'site/index';
?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="'.Url::home().'img/full_logo.png" class="pull-left brand img-responsive"/>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar text-uppercase mainmenu',
        ],
    ]);
    $menuItems[] = ['label' => 'Reviewscore ', 'url' => ['/site/index']];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-uppercase']
            )
            . Html::endForm()
            . '</li>';
    }

    $menuItems[] = ['label' => 'Für Händler', 'url' => ['/product/index']];

    echo Nav::widget([
        'activateItems' => true,
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();

    ?>

    <div class="container">
        <div class="row">
            <div class="testimage col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="<?= Url::home() ?>img/top_banner.jpg" class="img-responsive"><br>

                <?= Alert::widget([

                ]) ?>
                <div class="container-fluid">
                    <?= $content ?>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="short_logo">
            <img src="<?= Url::home() ?>img/short_logo.png" class="img_logo">
        </div>

        <div class="copyright">
            Copyright &copy; 2015 - 2017 Review Bridge Research GmbH - Alle Rechte vorbelhalten
        </div>
        .
        <?php
        echo Menu::widget([
            'items' => [
                ['label' => 'Einfach.Kaufen', 'url' => ['#']],
                ['label' => 'Impressum', 'url' => ['#']],
                ['label' => 'Datenshutz', 'url' => ['#']],
                ['label' => 'Kontakt', 'url' => ['#']],
                ['label' => 'AGB Verbraucher', 'url' => ['#']],
                ['label' => 'AGB Händler', 'url' => ['#']],
            ],
            'options' => ['class' => 'footmenu text-uppercase'],
        ]);
        ?>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
