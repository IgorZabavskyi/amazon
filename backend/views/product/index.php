<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add new product', ['get-amazon'], ['class' => 'btn btn-warning']) ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'options' => ['width' => '10px']
            ],
            [
                'attribute' => 'asin',
                'options' => ['width' => '40px']
            ],
            [
                'attribute' => 'title',
                'contentOptions' => ['style'=>'width: 450px; white-space:normal'],
            ],
            [
                'attribute' => 'price',
                'contentOptions' => ['style'=>'width: 20px; text-align: right'],
            ],
            //'picture:image',
            [
                'attribute' => 'picture',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img($data->picture,[
                        'alt'=>'YII2 Picture',
                        'style' => 'width:80px;'
                    ]);
                },
            ],
            [
                'attribute' => 'ean',
                'options' => ['width' => '30px']
            ],
            [
                'attribute' => 'brand',
                'options' => ['width' => '80px']
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'options' => ['width' => '10px'],
            ],
        ],
    ]); ?>
</div>
