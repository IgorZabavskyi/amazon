<?php
/**
 * Created by PhpStorm.
 * User: igorzabavskyi
 * Date: 9/26/17
 * Time: 6:27 PM
 */

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Add new product from Amazon';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_asin', [
        'model' => $model,
    ]) ?>

</div>