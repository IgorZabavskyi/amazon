<?php
/* @var $this yii\web\View */
/* @var $pages string */
/* @var $posts frontend\models\Products */

$this->title = 'Für Händler';
?>

<div class="tablerow topcell subline">
    <div class="col-md-4 col-sm-4 col-xs-7"><div class="test">880 Ergebnisse für <span class="search-rezult">"galaxy s7"</span>:</div></div>
    <div class="col-md-5 col-sm-5 hidden-xs"></div>
    <div class="col-md-3 col-sm-3 col-xs-5 text-right"> <span class="glyphicon glyphicon-th-list active"></span><span class="glyphicon glyphicon-th"></span> Vergleichen</div>
</div>

<!-- Relevanz-->
<div class="tablerow topcell subline">
    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="test">Filtern nach:
            <span class="search-word bordered">galaxy</span>
            <span class="search-word bordered ">s7</span>
            <span class="bordered">Alles entfernen</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3 relevanz">Relevanz<span class="glyphicon glyphicon-menu-down"></span></div>

</div>

<?php foreach($posts as $post): ?>
    <div class="tablerow prodcell subline">
        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <a href="#"><?= $post->title ?></a> <br>
            von <?= $post->brand ?><br> <!-- ОТ -->
            <img src="../img/stars.png" class="stars"><br>
            <a href="#">796 Bewertungsanalysen</a> <!-- Анализ оценки -->
        </div>
        <div class="col-md-3 col-sm-2 col-xs-4"><img src="<?= $post->picture ?>"></div>
        <div class="col-md-4 col-sm-5 hidden-xs">
            <a href="#"><?= $post->title ?></a> <br>
            von <?= $post->brand ?><br> <!-- ОТ -->
            <img src="../img/stars.png" class="stars"><br>
            <a href="#">796 Bewertungsanalysen</a> <!-- Анализ оценки -->
        </div>
        <div class="col-md-1 col-sm-2 col-xs-3 text-right price">
            <div class="headerprice">SEHR GUT</div>
            <div class="centerprice"><?= $post->price ?> €</div>
            <div class="footerprice">ReviewScore</div>
        </div>
        <div class="col-md-3 hidden-sm hidden-xs"></div>
        <div class="col-md-2 col-sm-3 col-xs-5">
            <div class="keyword"><span class="boldgreen">22 <img src="../img/cloud-10.png"></span>Kamera</div>
            <div class="keyword"><span class="boldgreen">146 <img src="../img/cloud-10.png"></span>Display</div>
            <div class="keyword"><span class="boldgreen">9 <img src="../img/cloud-10.png"></span>Edge</div>
            <a href="#" class="weitere">12 weitere Schlüsselthemen</a>
        </div> <!-- Другие ключевые слова -->

    </div>

<?php endforeach; ?>
<div class="pagination-container">
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
</div>
